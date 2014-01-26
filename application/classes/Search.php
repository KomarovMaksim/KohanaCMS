<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 22.12.13
 * Time: 18:49
  */ 
class Search {
	protected $_search_queries = array();
	protected $_results;
	protected $_total_pages;
	protected $_total_entities;
	protected $_per_page;
	protected $_page;

	public function __construct(){

	}

	public function add(ORM $query){
		$this->_search_queries[] = $query;
	}

	public function find($page, $per_page){
		$this->_page = $page;
		$this->_per_page = $per_page;

		$queries = array();
		$total_amount = 0;
		foreach($this->_search_queries as $query){
			$amount = clone $query;
			$amount = $amount->count_all();
			if (($page - 1)*$per_page <= $total_amount + $amount && $page*$per_page > $total_amount){
				$offset = ($page-1)*$per_page - $total_amount;
				$offset = $offset > 0 ? $offset : 0;
				$limit = $page*$per_page - $total_amount;
				$limit = $limit < $per_page ? $limit : $per_page;
				$queries[] = array(
					'q' => $query,
					'o' => $offset,
					'l' => $limit,
				);
			}
			$total_amount += $amount;
		}

		$results = array();
		foreach ($queries as $query){
			$result = $query['q']->offset($query['o'])->limit($query['l'])->find_all()->as_array();
			$results = Arr::merge($results, $result);
		}
		$this->_results = $results;
		$this->_total_entities = $total_amount;
		$this->_total_pages = ceil($total_amount / $per_page);
	}

	public function get_results(){
		return $this->_results;
	}

	public function total_pages(){
		return $this->_total_pages;
	}

	public function total_entities(){
		return $this->_total_entities;
	}

}
 