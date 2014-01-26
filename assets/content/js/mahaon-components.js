/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 23.03.13
 * Time: 1:53
 *
 * Changed 28.11.13
 *
 * This is alpha version for functional prototyping only
 */

function AJAXTable(options) {
    this.data = [];
    this.pagination = [];
    this.options = options;

    this.container = $('#' + options.id);

    this.operations = [];
    if (this.options.operations !== undefined) {
        this.operations = this.options.operations;
    }

    this.getData();
}

AJAXTable.prototype.getCaption = function (operation, def) {
    var caption = typeof(operation) == 'string' ? operation : def;
    caption = operation.title !== undefined ? operation.title : caption;
    return caption;
}

AJAXTable.prototype.getAction = function (operation, def) {
    var action = operation.url !== undefined ? operation.url : def;
    return action;
}

AJAXTable.prototype.render = function () {
    // Инициализация
    var url = this.options.url,
        ajax_url = this.options.ajax_url;
    var create = this.operations.create !== undefined,
        enable = this.operations.enable !== undefined,
        on_main = this.operations.on_main !== undefined, //current project only
        available = this.operations.available !== undefined, //current project only
        new_flag = this.operations.new_flag !== undefined, //current project only
        hot = this.operations.hot !== undefined, //current project only
        highlight = this.operations.highlight !== undefined, //current project only
        special = this.operations.special !== undefined, //current project only
        sorting = this.operations.sorting !== undefined,
        viewed = this.operations.viewed !== undefined,
        view = this.operations.view !== undefined,
        edit = this.operations.edit !== undefined,
        drop = this.operations.drop !== undefined,
        back = this.operations.back !== undefined,
        ved = view || drop || edit;

    var more_op = {};
    for (key in this.operations){
        if ($.inArray(key, ['back', 'create', 'view', 'edit', 'drop', 'viewed', 'sorting', 'special', 'available', 'enable', 'new_flag', 'hot', 'hightlight', 'on_main']) == -1){
            more_op[key] = this.operations[key];
            ved = true;
        }
    }

    this.pagination || (this.pagination = []); // Почему не инициализировано????
//    console.log(this.pagination !== undefined);
    var per_page = this.pagination.per_page,
        amount = this.pagination.amount,
        page = this.pagination.page,
        page_amount = Math.ceil(amount / per_page);

    this.container.empty();

    if (create || back){
        var toolbar = $('<div class="btn-toolbar"></div>');

        if (create) {
            var caption = this.getCaption(this.operations.create, 'Создать');
            var action = this.getAction(this.operations.create, url + '/create');
            var create_button = $('<a class="btn btn-inverse" href="' + action + '"><i class="icon-file"></i> ' + caption + '</a>');
            toolbar.append(create_button);
        }
        if (back){
            var caption = this.getCaption(this.operations.back, 'Назад');
            var action = this.getAction(this.operations.back, url);
            var back_button = $('<a class="btn" href="' + action + '"><i class="icon-arrow-left"></i> ' + caption + '</a>');
            toolbar.append(back_button);
        }

        this.container.append(toolbar);
    }

    var table = $('<table class="table table-condensed"></table>');
    // Заголовок
    var tr = $('<tr></tr>');
    if (sorting) {
        var caption = this.getCaption(this.operations.sorting, 'Сортировка');
        var td = $('<td></td>');
        td.append(caption);
        tr.append(td);
    }

    if (enable) {
        var caption = this.getCaption(this.operations.enable, 'Вкл/Выкл');
        var td = $('<td style="width: 20px"></td>');
        td.append(caption);
        tr.append(td);
    }

    if (viewed) {
        var caption = this.getCaption(this.operations.viewed, 'Просмотрено');
        var td = $('<td style="width: 20px"></td>');
        td.append(caption);
        tr.append(td);
    }

    // for current project only
    if (available) {
        var caption = this.getCaption(this.operations.available, 'Наличие');
        var td = $('<td style="width: 20px"></td>');
        td.append(caption);
        tr.append(td);
    }
    // for current project only
    if (on_main) {
        var caption = this.getCaption(this.operations.on_main, 'На главной');
        var td = $('<td style="width: 20px"></td>');
        td.append(caption);
        tr.append(td);
    }

    // for current project only
    if (new_flag) {
        var caption = this.getCaption(this.operations.new_flag, 'Новинка');
        var td = $('<td style="width: 20px"></td>');
        td.append(caption);
        tr.append(td);
    }

    // for current project only
    if (hot) {
        var caption = this.getCaption(this.operations.hot, 'Горячее');
        var td = $('<td style="width: 20px"></td>');
        td.append(caption);
        tr.append(td);
    }

    // for current project only
    if (highlight) {
        var caption = this.getCaption(this.operations.highlight, 'Выделено');
        var td = $('<td style="width: 20px"></td>');
        td.append(caption);
        tr.append(td);
    }

    // for current project only
    if (special) {
        var caption = this.getCaption(this.operations.special, 'Спецразмещение');
        var td = $('<td style="width: 20px"></td>');
        td.append(caption);
        tr.append(td);
    }

    for (key in this.options.columns) {
        var td = $('<td></td>');
        var col = this.options.columns[key]
        if (typeof(col) == 'object') {
            td.append(col.title);
        } else
            td.append(col);
        tr.append(td);
    }
    if (ved) {
        var td = $('<td></td>');
        td.append('Операции');
        tr.append(td);
    }

    table.append($('<thead></thead>').append(tr));

    for (key in this.data) {
        var tr = $('<tr></tr>');
        if (viewed && !(this.data[key].viewed == 1))
            tr.css({'font-weight': 'bold'});
        if (sorting) {
            var td = $('<td></td>');
            if (key > 0 || page > 1)
                td.append('<a class="btn btn-mini btn-ajax" href="' + ajax_url + '/sort_up/' + this.data[key].id + '"><i class="icon-arrow-up"></i></a>');
            if (key < this.data.length - 1 || page < page_amount)
                td.append('<a class="btn btn-mini btn-ajax" href="' + ajax_url + '/sort_down/' + this.data[key].id + '"><i class="icon-arrow-down"></i></a>');
            tr.append(td);
        }

        if (enable) {
            var td = $('<td></td>');
            if (this.data[key].enabled == 1)
                td.append('<a title="Видимый" class="btn btn-mini btn-ajax" href="' + ajax_url + '/disable/' + this.data[key].id + '"><i class="icon-eye-open"></i></a>');
            else
                td.append('<a title="Невидимый" class="btn btn-mini btn-ajax" href="' + ajax_url + '/enable/' + this.data[key].id + '"><i class="icon-eye-close"></i></a>');
            tr.append(td);
        }

        if (viewed) {
            var td = $('<td></td>');
            if (this.data[key].viewed == 1)
                td.append('<a title="Просмотрено" class="btn btn-mini btn-ajax" href="' + ajax_url + '/unseen/' + this.data[key].id + '"><i class="icon-check"></i></a>');
            else
                td.append('<a title="Не просмотрено" class="btn btn-mini btn-ajax" href="' + ajax_url + '/seen/' + this.data[key].id + '"><i class="icon-check-empty"></i></a>');
            tr.append(td);
        }

        if (on_main) {
            var td = $('<td></td>');
            if (this.data[key].on_main == 1)
                td.append('<a title="На главной" class="btn btn-mini btn-ajax" href="' + ajax_url + '/offmain/' + this.data[key].id + '"><i class="icon-check"></i></a>');
            else
                td.append('<a title="Не на главной" class="btn btn-mini btn-ajax" href="' + ajax_url + '/onmain/' + this.data[key].id + '"><i class="icon-check-empty"></i></a>');
            tr.append(td);
        }

        if (available) {
            var td = $('<td></td>');
            if (this.data[key].available == 1)
                td.append('<a title="В наличии" class="btn btn-mini btn-ajax" href="' + ajax_url + '/outofstock/' + this.data[key].id + '"><i class="icon-check"></i></a>');
            else
                td.append('<a title="Нет в наличии" class="btn btn-mini btn-ajax" href="' + ajax_url + '/instock/' + this.data[key].id + '"><i class="icon-check-empty"></i></a>');
            tr.append(td);
        }

        if (new_flag) {
            var td = $('<td></td>');
            if (this.data[key].new_flag == 1)
                td.append('<a title="Новинка" class="btn btn-mini btn-ajax" href="' + ajax_url + '/old/' + this.data[key].id + '"><i class="icon-bookmark"></i></a>');
            else
                td.append('<a title="Не новинка" class="btn btn-mini btn-ajax" href="' + ajax_url + '/new/' + this.data[key].id + '"><i class="icon-bookmark-empty"></i></a>');
            tr.append(td);
        }

        if (hot) {
            var td = $('<td></td>');
            if (this.data[key].hot)
                td.append('<a title="Горячее" class="btn btn-mini btn-ajax" href="' + ajax_url + '/nothot/' + this.data[key].id + '"><i class="icon-thumbs-up"></i></a>');
            else
                td.append('<a title="Не горячее" class="btn btn-mini btn-ajax" href="' + ajax_url + '/hot/' + this.data[key].id + '"><i class="icon-thumbs-down"></i></a>');
            tr.append(td);
        }
        if (highlight) {
            var td = $('<td></td>');
            if (this.data[key].highlight)
                td.append('<a title="Выделено" class="btn btn-mini btn-ajax" href="' + ajax_url + '/nothighlighted/' + this.data[key].id + '"><i class="icon-flag"></i></a>');
            else
                td.append('<a title="Не выделено" class="btn btn-mini btn-ajax" href="' + ajax_url + '/highlighted/' + this.data[key].id + '"><i class="icon-flag-alt"></i></a>');
            tr.append(td);
        }
        if (special) {
            var td = $('<td></td>');
            if (this.data[key].special)
                td.append('<a title="Спецразмещение" class="btn btn-mini btn-ajax" href="' + ajax_url + '/notspecial/' + this.data[key].id + '"><i class="icon-star"></i></a>');
            else
                td.append('<a title="Не спецразмещение" class="btn btn-mini btn-ajax" href="' + ajax_url + '/special/' + this.data[key].id + '"><i class="icon-star-empty"></i></a>');
            tr.append(td);
        }
        for (col_key in this.options.columns) {
            var td = $('<td></td>');
            var col = this.options.columns[col_key];
            if (typeof(col) == 'object') {
                if (col.type == 'image') {
                    var style = '';
                    if (col.options !== undefined && col.options.width !== undefined && col.options.height !== undefined)
                        style = ' style="margin: 0 auto; width: ' + col.options.width + 'px; height: ' + col.options.height + 'px;"';
                    var div = $('<div class="thumbnail"' + style + '></div>');
                    div.append('<img src="' + this.data[key][col_key] + '" ' + style + '/>');
                    td.append(div);
                }
                if (col.type == 'link') {
                    var target = col.target ? ' target="' + col.target + '" ' : '';
                    var link = $('<a href="' + this.data[key][col_key]['link'] + '"' + target +'>' + this.data[key][col_key]['title'] + '</a>')
                    td.append(link);
                }
            } else {
                td.append(this.data[key][col_key]);
            }
            tr.append(td);
        }

        if (ved) {
            var td = $('<td></td>');
            var spacer = '';
            for (op_key in more_op){
                var caption = more_op[op_key].title;
                var action = more_op[op_key].url;
                var icon = more_op[op_key].icon;
                action = action.replace(/<id>/g, this.data[key].id);
                td.append('<a class="btn btn-mini" href="' + action + '"> <i class="' + icon + '"></i> ' + caption + '</a>');
                spacer = '&nbsp;&nbsp;&nbsp;&nbsp;';
            }
            td.append(spacer);
            if (view) {
                var caption = this.getCaption(this.operations.view, 'Просмотреть');
                var action = this.getAction(this.operations.view, url + '/view');
                td.append('<a class="btn btn-mini" href="' + action + '/' + this.data[key].id + '"> <i class="icon-eye-open"></i> ' + caption + '</a>');
            }
            if (edit)
                td.append('<a class="btn btn-mini" href="' + url + '/edit/' + this.data[key].id + '"> <i class="icon-edit"></i> Редактировать</a>');
            if (drop)
                td.append('<a class="btn btn-danger btn-mini btn-ajax" href="' + ajax_url + '/delete/' + this.data[key].id + '"> <i class="icon-delete"></i> Удалить</a>');
            tr.append(td);
        }
        table.append(tr);
    }
    this.container.append(table);

    page_amount = parseInt(page_amount);
    page = parseInt(page);
    if (page_amount > 1) {
        var min = page > 3 ? page - 3 : 1;
        var max = page < page_amount - 3 ? page + 3 : page_amount;
        var back = page > 10 ? page - 10 : 1;
        var forward = page < page_amount - 10 ? page + 10 : page_amount;
        var pagination = $('<div class="pagination pagination-centered"></div>');
        var ul = $('<ul></ul>');
        pagination.append(ul);

        if (page > 1)
            ul.append('<li><a class="page" href="#" rel="' + back + '">&lt;&lt;</a></li>');

        for (i = min; i <= max; i++)
            ul.append('<li' + (page == i ? ' class="active"' : '') + '><a class="page" href="#" rel="' + i + '">' + i + '</a></li>');
        if (page < page_amount)
            ul.append('<li><a class="page" href="#" rel="' + forward + '">&gt;&gt;</a></li>');

        this.container.append(pagination);
    }
}

AJAXTable.prototype.getData = function (page, per_page) {
    page || (page = this.pagination.page);
    per_page || (per_page = this.pagination.per_page);
    page || (page = 1);
    per_page || (per_page = 20);
    this.pagination.page = page;
    this.pagination.per_page = per_page;

    var sender = this;
    $.post(this.options.ajax_url + '/list', {
        options: this.options,
        page: page,
        per_page: per_page
    }, function (response) {
        if (response.result === true) {
            sender.data = response.data;
            sender.pagination = response.pagination;
            sender.render();
        }
    }, 'json');
}

function popup(url, name, options, width, height) {
    width = width || "80%";
    height = height || "70%";
    typeof width == "string" && (width.length > 1 && width.substr(width.length - 1, 1) == "%") && (width = parseInt(window.screen.width * parseInt(width, 10) / 100, 10));
    typeof height == "string" && (height.length > 1 && height.substr(height.length - 1, 1) == "%") && (height = parseInt(window.screen.height * parseInt(height, 10) / 100, 10));
    width < 640 && (width = 640);
    height < 420 && (height = 420);
    var top = parseInt((window.screen.height - height) / 2, 10),
        left = parseInt((window.screen.width - width) / 2, 10),
        options = (options || "location=no,menubar=no,toolbar=no,dependent=yes,minimizable=no,modal=yes,alwaysRaised=yes,resizable=yes,scrollbars=yes") + ",width=" + width + ",height=" + height + ",top=" + top + ",left=" + left,
        wnd = window.open("", name, options, true);
    if (!wnd) return false;
    try {
        if (navigator.userAgent.toLowerCase().indexOf(" chrome/") == -1) {
            wnd.moveTo(left, top);
            wnd.resizeTo(width, height)
        }
        wnd.focus();
        wnd.location.href = url;
    } catch (g) {
        window.open(url, name, f, true)
    }
    return true
}


