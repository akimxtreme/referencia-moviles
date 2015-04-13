var divname;
var http = getXmlHttpObject();

function handleHttpResponse()
{
    if (http.readyState == 0)
    {
        results = "Error al Cargar los datos";
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname).innerHTML = results;
    }

    if (http.readyState == 1)
    {
        results = "";
        //results = '<img src="../imagenes/fetching.gif">';
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname).innerHTML = results;
    }

    if (http.readyState == 4)
    {
        results = http.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname).innerHTML = results;
        tablasort();
        document.getElementById('mini').addEventListener('change', mini, false);
        document.getElementById('grande').addEventListener('change', grande, false);

        document.getElementById('galeria1').addEventListener('change', galeria1, false);
        document.getElementById('galeria2').addEventListener('change', galeria2, false);
        document.getElementById('galeria3').addEventListener('change', galeria3, false);

    }
}

function nuevoAjax()
{
    var xmlhttp = false;
    try
    {
        // No IE
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch (e)
    {
        try
        {
            // IE 
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest != "undefined") {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function getXmlHttpObject()
{
    var xmlhttp;
    /*@cc_on
     @if (@_jscript_version >= 5)
     try
     {
     xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
     }
     catch (e)
     {
     try
     {
     xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
     }
     catch (e)
     {
     xmlhttp = false;
     }
     }
     @else
     xmlhttp = false;
     @end @*/

    if (!xmlhttp && typeof XMLHttpRequest != 'undefined')
    {
        try
        {
            xmlhttp = new XMLHttpRequest();
        }
        catch (e)
        {
            xmlhttp = false;
        }
    }
    return xmlhttp;
}

function url(url)
{
    divname = "chi";
    http.open("GET", 'paginas/' + url, true);
    //http.open("GET", url+"?valor="+valor, true);
    http.onreadystatechange = handleHttpResponse;
    http.send(null);
}

function url2(url)
{
    divname = "chi";
    http.open("GET", 'paginas/' + url, true);
    //http.open("GET", url+"?valor="+valor, true);
    http.onreadystatechange = handleHttpResponse;
    http.send(null);
}

function tablasort() {

    $(function () {

        $.extend($.tablesorter.themes.bootstrap, {
            // these classes are added to the table. To see other table classes available,
            // look here: http://twitter.github.com/bootstrap/base-css.html#tables
            table: 'table table-bordered',
            caption: 'caption',
            header: 'bootstrap-header', // give the header a gradient background
            footerRow: '',
            footerCells: '',
            icons: '', // add "icon-white" to make them white; this icon class is added to the <i> in the header
            sortNone: 'bootstrap-icon-unsorted',
            sortAsc: 'icon-chevron-up glyphicon glyphicon-chevron-up', // includes classes for Bootstrap v2 & v3
            sortDesc: 'icon-chevron-down glyphicon glyphicon-chevron-down', // includes classes for Bootstrap v2 & v3
            active: '', // applied when column is sorted
            hover: '', // use custom css here - bootstrap class may not override it
            filterRow: '', // filter row class
            even: '', // odd row zebra striping
            odd: ''  // even row zebra striping
        });

        // call the tablesorter plugin and apply the uitheme widget
        $("table").tablesorter({
            // this will apply the bootstrap theme if "uitheme" widget is included
            // the widgetOptions.uitheme is no longer required to be set
            theme: "bootstrap",
            widthFixed: true,
            headerTemplate: '{content} {icon}', // new in v2.7. Needed to add the bootstrap icon!

            // widget code contained in the jquery.tablesorter.widgets.js file
            // use the zebra stripe widget if you plan on hiding any rows (filter widget)
            widgets: ["uitheme", "filter", "zebra"],
            widgetOptions: {
                // using the default zebra striping class name, so it actually isn't included in the theme variable above
                // this is ONLY needed for bootstrap theming if you are using the filter widget, because rows are hidden
                zebra: ["even", "odd"],
                // reset filters button
                filter_reset: ".reset"

                        // set the uitheme widget to use the bootstrap theme class names
                        // this is no longer required, if theme is set
                        // ,uitheme : "bootstrap"

            }
        })
                .tablesorterPager({
                    // target the pager markup - see the HTML block below
                    container: $(".ts-pager"),
                    // target the pager page select dropdown - choose a page
                    cssGoto: ".pagenum",
                    // remove rows from the table to speed up the sort of large tables.
                    // setting this to false, only hides the non-visible rows; needed if you plan to add/remove rows with the pager enabled.
                    removeRows: false,
                    // output string - default is '{page}/{totalPages}';
                    // possible variables: {page}, {totalPages}, {filteredPages}, {startRow}, {endRow}, {filteredRows} and {totalRows}
                    output: '{startRow} - {endRow} / {filteredRows} ({totalRows})'

                });

    });


    $(function () {

        // filter button demo code
        $('button.filter').click(function () {
            var col = $(this).data('column'),
                    txt = $(this).data('filter');
            $('table').find('.tablesorter-filter').val('').eq(col).val(txt);
            $('table').trigger('search', false);
            return false;
        });

        // toggle zebra widget
        $('button.zebra').click(function () {
            var t = $(this).hasClass('btn-success');
//			if (t) {
            // removing classes applied by the zebra widget
            // you shouldn't ever need to use this code, it is only for this demo
//				$('table').find('tr').removeClass('odd even');
//			}
            $('table')
                    .toggleClass('table-striped')[0]
                    .config.widgets = (t) ? ["uitheme", "filter"] : ["uitheme", "filter", "zebra"];
            $(this)
                    .toggleClass('btn-danger btn-success')
                    .find('i')
                    .toggleClass('icon-ok icon-remove glyphicon-ok glyphicon-remove').end()
                    .find('span')
                    .text(t ? 'disabled' : 'enabled');
            $('table').trigger('refreshWidgets', [false]);
            return false;
        });
    });
}


function dependiente(url, div, valor)
{
    divname = div;
    //http.open("GET", 'paginas' + url, true);
    http.open("GET", 'paginas/dependiente/' + url + "?valor=" + valor, true);
    http.onreadystatechange = handleHttpResponse;
    http.send(null);
}