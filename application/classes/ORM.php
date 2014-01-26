<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 25.03.13
 * Time: 15:12
 */
class ORM extends Kohana_ORM {

	protected $_model = null;
	protected $_where = null;

	public function create(Validation $validation = NULL) {
		$db = Database::instance();
		$db->begin();
		$columns = $this->list_columns();
		if (isset($columns['sort_order'])) {
			$entities = ORM::factory($this->_model);
			if (isset($this->_where)){
				$entities = $entities->where($this->_where[0], $this->_where[1], $this->_where[2]);
			}
			$entities = $entities->find_all();
			foreach ($entities as $entity) {
				$entity->sort_order++;
				$entity->save();
			}

			$this->sort_order = 1;
		}
		parent::create($validation);
		$db->commit();
	}

	public static function factory($model, $where = NULL, $id = NULL) {
		// Set class name
		$_model = $model;
		$model = 'Model_' . $model;
		if (!is_array($where) || count($where) != 3){
			$id = $where;
			$where = null;
		}

		return new $model($id, $_model, $where);
	}

	public function __construct($id = NULL, $_model = NULL, $where = NULL) {
		$this->_model = $_model;
		if (isset($where))
			$this->_where = $where;
		parent::__construct($id);
	}

	public function sort_up() {
		$db = Database::instance();
		$db->begin();
		$columns = $this->list_columns();
		if (isset($columns['sort_order'])) {
			$sort_order = $this->sort_order - 1;
			if ($sort_order > 0) {
				$entity = ORM::factory($this->_model)->where('sort_order', '=', $sort_order);
				if (isset($this->_where)){
					$entity = $entity->where($this->_where[0], $this->_where[1], $this->_where[2]);
				}
				$entity = $entity->find();
				$entity->sort_order++;
				$entity->save();

				$this->sort_order--;
				$this->save();
			}
		}
		$db->commit();
	}

	public function sort_down() {
		$db = Database::instance();
		$db->begin();
		$columns = $this->list_columns();
		if (isset($columns['sort_order'])) {
			$max_sort_order = ORM::factory($this->_model);
			if (isset($this->_where)){
				$max_sort_order = $max_sort_order->where($this->_where[0], $this->_where[1], $this->_where[2]);
			}
	        $max_sort_order = $max_sort_order->order_by('sort_order', 'desc')->limit(1)->find()->sort_order;

			$sort_order = $this->sort_order + 1;
			if ($sort_order <= $max_sort_order) {
				$entity = ORM::factory($this->_model);
				if (isset($this->_where)){
					$entity = $entity->where($this->_where[0], $this->_where[1], $this->_where[2]);
				}
                $entity = $entity->where('sort_order', '=', $sort_order)->find();
				$entity->sort_order--;
				$entity->save();

				$this->sort_order++;
				$this->save();
			}
		}
		$db->commit();
	}

	public function delete() {
		$db = Database::instance();
		$db->begin();
		$columns = $this->list_columns();
		if (isset($columns['sort_order']) && isset($this->_model)) {
			$sort_order = $this->sort_order;

			$entities = ORM::factory($this->_model);
			if (isset($this->_where)){
				$entities = $entities->where($this->_where[0], $this->_where[1], $this->_where[2]);
			}
			$entities = $entities->where('sort_order', '>', $sort_order)->find_all();
			foreach ($entities as $entity) {
				$entity->sort_order--;
				$entity->save();
			}
		}
		parent::delete();

		$db->commit();
	}

	const DATE_RU = 'd.m.Y';
	const DATETIME_RU = 'd.m.Y H:i:s';
	const DATE_EN = 'Y-m-d';
	const DATETIME_EN = 'Y-m-d H:i:s';

	public function __get($column) {

		$value = parent::__get($column);

		if ($value != null) {
			$tablecolumns = parent::table_columns();

			if (isset($tablecolumns[$column]) && $tablecolumns[$column]['data_type'] == 'timestamp'){
				$value = DateTime::createFromFormat(self::DATETIME_EN, $value)->format(self::DATETIME_RU);
			}
		}
		return $value;
	}

	public function __set($column, $value) {

		if ($value != null) {

			$tablecolumns = parent::table_columns();

			if (isset($tablecolumns[$column]) && $tablecolumns[$column]['data_type'] == 'timestamp') {
				if (preg_match('/\d{1,2}.\d{1,2}.\d{4} \d{1,2}:\d{1,2}:\d{1,2}/', $value, $match) > 0)
					$value = DateTime::createFromFormat(self::DATETIME_RU, $match[0])->format(self::DATETIME_EN);
				elseif (preg_match('/\d{1,2}.\d{1,2}.\d{4}/', $value, $match) > 0)
					$value = DateTime::createFromFormat(self::DATE_RU, $match[0])->format(self::DATETIME_EN);
				elseif (preg_match('/\d{1,2}:\d{1,2}:\d{1,2}/', $value, $match) > 0)
					$value = DateTime::createFromFormat('H:i:s', $match[0])->format(self::DATETIME_EN);
			}
		}

		parent::__set($column, $value);
	}
}
