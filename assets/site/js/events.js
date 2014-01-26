eventSearch = new EventSearch();
searchWithinMonth = false;

function setSearchWithinMonth(flag){
    if( flag){
        document.getElementById('searchWithinMonth').checked=true;
        eventSearch._day=null;
        searchWithinMonth = true;
    }
    else{
        document.getElementById('searchWithinDay').checked=true;
        eventSearch._day=null;
        searchWithinMonth = false;
    }
}

function EventSearch(){

    this._year = null;
    this._month = null;
    this._day = null;

    this._swm = false;

    this._location = null;
    this._category = null;

    this._doSearch = false;


    this._submit = function(){

        var locationId = $('#ecs_location_2').val();
        /*
        var locationId = (document.getElementById('ecs_location_4').selectedIndex == 0) ?
            (document.getElementById('ecs_location_3').selectedIndex == 0) ?
                (document.getElementById('ecs_location_2').selectedIndex == 0) ?
                    (document.getElementById('ecs_location_1').selectedIndex == 0) ? null
                        : document.getElementById('ecs_location_1').options[document.getElementById('ecs_location_1').selectedIndex].value
                    : document.getElementById('ecs_location_2').options[document.getElementById('ecs_location_2').selectedIndex].value
                : document.getElementById('ecs_location_3').options[document.getElementById('ecs_location_3').selectedIndex].value
            : document.getElementById('ecs_location_4').options[document.getElementById('ecs_location_4').selectedIndex].value;
*/
        if( locationId != null)
            this._location = locationId;

        var categoryId = document.getElementById('ecs_category_1').selectedIndex == 0 ? null : document.getElementById('ecs_category_1').options[document.getElementById('ecs_category_1').selectedIndex].value;

        if( categoryId != null)
            this._category = categoryId;

//        var newLocation = EVENT_BASE_URL;
        var newLocation = '/events';


        //year and month MUST BE THERE!
        newLocation += appendParameter(newLocation, 'y', this._year);
        newLocation += appendParameter(newLocation, 'm', this._month);

        newLocation += (this._day != null) ? appendParameter(newLocation, 'd', this._day) : "";

        newLocation += (this._location != null) ? appendParameter(newLocation, 'location', this._location) : "";
        newLocation += (this._category != null) ? appendParameter(newLocation, 'category', this._category) : "";
        newLocation += appendParameter(newLocation, 'doSearch', true);

        window.location.href = newLocation;
    };

    this._submitRightColumn = function(){

        var newLocation = EVENT_BASE_URL;
        //year and month MUST BE THERE!
        newLocation += appendParameter(newLocation, 'y', this._year);
        newLocation += appendParameter(newLocation, 'm', this._month);
        newLocation += (this._day != null) ? appendParameter(newLocation, 'd', this._day) : "";
        newLocation += appendParameter(newLocation, 'doSearch', true);
        window.location.href = newLocation;
    };

    this._submitFullMonth = function(){

        var newLocation = EVENT_BASE_URL;
        //year and month MUST BE THERE!
        if (this._year == null) {
            var myDate = new DAte();
            this._year = myDate.getFullYear();
            this._month = myDate.getMonth() + 1;
        }
        newLocation += appendParameter(newLocation, 'y', this._year);
        newLocation += appendParameter(newLocation, 'm', this._month);

        newLocation += appendParameter(newLocation, 'doSearch', true);
        window.location.href = newLocation;
    };
}



function eventInitSelectBoxes(locationId, categoryId){


    if( locationId != null){
        //fix first level location
        for(var i=0; i<locationArray.length; i++)
            if( locationArray[i][1] == null)
                addOption('ecs_location_1', locationArray[i][0], locationArray[i][2]);

        //fix location to its posted value
        if( locationId != '')
            eventFixParents('location',locationId);
    }

    if( categoryId != null){
        //fix first level general
        for(var i=0; i<categoryArray.length; i++)
            if( categoryArray[i][1] == null)
                addOption('ecs_category_1', categoryArray[i][0], categoryArray[i][2]);

        //fix experience to its posted value
        if( categoryId != '')
            eventFixParents('category',categoryId);
    }
}


function reloadOptions(selectBox){

    //first clean the next select boxes
    propagateClean(selectBox);

    //find target select box
    var targetSelectBox = selectBox.substring(0, selectBox.length-1) + (selectBox.substring(selectBox.length-1) - -1);

    //get selected id
    var sb = document.getElementById(selectBox);
    var selectedId = document.getElementById(selectBox).options[sb.selectedIndex].value;
    var firstUnder = selectBox.indexOf('_');
    eval( 'var currentArray = ' + selectBox.substring(firstUnder + 1, selectBox.lastIndexOf('_')) + 'Array');

    if( selectedId == -1){ // then we need all prefectures
        var topLevelIds = findTopLevelIds();
        for(var i=0; i<currentArray.length; i++)
            if( topLevelIds.indexOf(currentArray[i][1]) != -1)
                addOption(targetSelectBox, currentArray[i][0], currentArray[i][2]);

    }
    else{
        for(var i=0; i<currentArray.length; i++)
            if( currentArray[i][1] == selectedId)
                addOption(targetSelectBox, currentArray[i][0], currentArray[i][2]);
    }


}


function propagateClean(selectBox){

    var targetSelectBox = selectBox.substring(0, selectBox.length-1) + (selectBox.substring(selectBox.length-1) - -1);

    if( document.getElementById(targetSelectBox) != null){
        document.getElementById(targetSelectBox).options.selectedIndex = 0;
        document.getElementById(targetSelectBox).options.length = 1;
        propagateClean(targetSelectBox);
    }


}


function addOption(selectBox, id, name){
    var sb = document.getElementById(selectBox);
    var size = sb.options.length;
    sb.options[size] = new Option(name, id);
}




function appendParameter(str, paramName, paramValue){
    if( str.indexOf("?") == -1)
        return "?"+paramName+"="+paramValue;
    else
        return "&"+paramName+"="+paramValue;
}



/*********************************************************************************************/
//these are used to populate the selects after the post...

function eventFixSelectedIndex(selectBoxName, selectedValue){
    var sb = document.getElementById(selectBoxName);

    if (selectBoxName == 'ecs_location_1')
        sb.selectedIndex = 0;
    else
        for(var jj=0; jj<sb.options.length; jj++)
            if( sb.options[jj].value == selectedValue){
                sb.selectedIndex = jj;
                break;
            }
    reloadOptions(selectBoxName);
}

function fixSelectedIndex(selectBoxName, selectedValue){
    var sb = document.getElementById(selectBoxName);
    for(var jj=0; jj<sb.options.length; jj++)
        if( sb.options[jj].value == selectedValue){
            sb.selectedIndex = jj;
            break;
        }
    reloadOptions(selectBoxName);
}


function findParent(categoryName, value){

    eval('var currentArray='+categoryName+'Array;');
    for(var i=0; i<currentArray.length; i++)
        if( currentArray[i][0] == value)
            return currentArray[i][1];


}

function eventFixParents(categoryName, value){
    var selectedValues = new Array();
    var parent = null;

    selectedValues[0] = value;
    for(var j=0;  (parent = findParent(categoryName, selectedValues[j])) != null ; selectedValues[++j] = parent);

    for(var ii=selectedValues.length-1; ii>=0; ii--){
        var currentSelectBoxName = 'ecs_'+categoryName+'_' + (selectedValues.length -ii);
        eventFixSelectedIndex(currentSelectBoxName, selectedValues[ii]);
    }



}

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

function getSelectedDate() {
    var y = getUrlVars()["y"];
    var m = getUrlVars()["m"];
    var d = getUrlVars()["d"];
    var toDay = new Date();
    eventSearch._year = y;
    eventSearch._month = m;
    eventSearch._day = d;
    if (y == null || y == '') {
        eventSearch._year = toDay.getFullYear();
        eventSearch._month = toDay.getMonth() + 1;
        eventSearch._day = toDay.getDate();
    }
    if (d != null && d != '') {
        return new Date(y, m - 1, d);
    } else if (m != null && m != ''){
        return new Date(y, m - 1, 1);
    }
    return "+0d";
}