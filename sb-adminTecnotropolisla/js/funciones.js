function agregar() {

    if ((document.getElementById('especificacion').selectedIndex == 0) || (document.getElementById('valor').value == "")) {

        alert('Por favor seleccione una especificacion e indique su valor');

    } else {

        var i = document.getElementById("tabla").rows.length - 1;
        var table = document.getElementById("tabla");
        var row = table.insertRow(1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);

        cell1.innerHTML = document.getElementById('especificacion').options[document.getElementById('especificacion').selectedIndex].text + '<input type="hidden" id="especificaciones" name="especificaciones[' + i + ']" readonly="yes" value="' + document.getElementById('especificacion').options[document.getElementById('especificacion').selectedIndex].value + '">';
        cell2.innerHTML = '<div class="text-center">' + document.getElementById('valor').value + '<input type="hidden" id="valores" name="valores[' + i + ']" readonly="yes" value="' + document.getElementById('valor').value + '"></div>';

        var campo = document.getElementById('a');

        campo.value = document.getElementById('especificacion').selectedIndex;

        cell3.innerHTML = '<button class="btn btn-sm btn-hover btn-danger" value="' + document.getElementById('a').value + '" onclick="quitar(this,this.value);"><i class="glyphicon glyphicon-remove"></i></button>';

        var seleccion = document.getElementById('especificacion').selectedIndex;
        document.getElementById('especificacion').getElementsByTagName('option')[seleccion].className = "oculto";

        document.getElementById('especificacion').selectedIndex = 0;
        document.getElementById('valor').value = "";

    }
}

function quitar(valor, valor2) {

    document.getElementById('especificacion').getElementsByTagName('option')[valor2].className = "";

    var fila = valor.parentNode.parentNode.rowIndex;
    document.getElementById("tabla").deleteRow(fila);

}
/******************************/

function agregar2() {

    var tipo = document.getElementById('tipo').options[document.getElementById('tipo').selectedIndex];
    var gama = document.getElementById('gama').options[document.getElementById('gama').selectedIndex];
    var marca = document.getElementById('marca').options[document.getElementById('marca').selectedIndex];
    var modelo = document.getElementById('modelo');

    if ((tipo.value == "") || (gama.value == "") || (marca.value == "") || (modelo.value == "")) {

        alert('Los campos con asterisco (*) son obligatorios');

    } else {

        var i = document.getElementById("tabla").rows.length - 1;

        var table = document.getElementById("tabla");
        var row = table.insertRow(1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);

        cell1.innerHTML = document.getElementById('tipo').options[document.getElementById('tipo').selectedIndex].text + '<input type="hidden" id="tipos" name="tipos[' + i + ']" readonly="yes" value="' + document.getElementById('tipo').options[document.getElementById('tipo').selectedIndex].value + '">';
        cell2.innerHTML = document.getElementById('gama').options[document.getElementById('gama').selectedIndex].text + '<input type="hidden" id="gamas" name="gamas[' + i + ']" readonly="yes" value="' + document.getElementById('gama').options[document.getElementById('gama').selectedIndex].value + '">';
        cell3.innerHTML = document.getElementById('marca').options[document.getElementById('marca').selectedIndex].text + '<input type="hidden" id="marcas" name="marcas[' + i + ']" readonly="yes" value="' + document.getElementById('marca').options[document.getElementById('marca').selectedIndex].value + '">';
        cell4.innerHTML = '<div class="text-center">' + document.getElementById('modelo').value + '<input type="hidden" id="modelos" name="modelos[' + i + ']" readonly="yes" value="' + document.getElementById('modelo').value + '"></div>';
        cell5.innerHTML = '<button class="btn btn-sm btn-hover btn-danger" value="' + i + '" onclick="quitar2(this);"><i class="glyphicon glyphicon-remove"></i></button>';

        document.getElementById('modelo').value = "";

    }
}

function quitar2(valor) {

    var fila = valor.parentNode.parentNode.rowIndex;
    document.getElementById("tabla").deleteRow(fila);

}

function asignar(valor, i) {

    if(document.getElementById('checkbox_marcas' + i).checked==true)
    {
         document.getElementById('marca' + i).value = valor;
    }else{
        document.getElementById('marca' + i).value = "x";
    } 
}

function mini(evt) {

    var files = evt.target.files; // FileList object
    //Obtenemos la imagen del campo "file". 
    for (var i = 0, f; f = files[i]; i++) {
        //Solo admitimos imágenes.
        if (!f.type.match('image.*')) {
            continue;
        }

        var reader = new FileReader();

        reader.onload = (function (theFile) {
            return function (e) {
                // Creamos la imagen.
                //document.getElementById("papa").innerHTML = ['Nombre: ', escape(theFile.name), ' || Tamanio: ', escape(theFile.size), ' bytes || type: ', escape(theFile.type), '<br /><img class="thumb" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
                
                document.getElementById("img_mini").innerHTML = ['<img class="thumb" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
            };
        })(f);

        reader.readAsDataURL(f);
    }
}

function grande(evt) {

    var files = evt.target.files; // FileList object
    //Obtenemos la imagen del campo "file". 
    for (var i = 0, f; f = files[i]; i++) {
        //Solo admitimos imágenes.
        if (!f.type.match('image.*')) {
            continue;
        }

        var reader = new FileReader();

        reader.onload = (function (theFile) {
            return function (e) {
                // Creamos la imagen.
                //document.getElementById("cola").innerHTML = ['Nombre: ', escape(theFile.name), ' || Tamanio: ', escape(theFile.size), ' bytes || type: ', escape(theFile.type), '<br /><img class="thumb" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
                document.getElementById("img_grande").innerHTML = ['<img class="thumb" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
            };
        })(f);

        reader.readAsDataURL(f);
    }
}

function galeria1(evt) {

    var files = evt.target.files; // FileList object
    //Obtenemos la imagen del campo "file". 
    for (var i = 0, f; f = files[i]; i++) {
        //Solo admitimos imágenes.
        if (!f.type.match('image.*')) {
            continue;
        }

        var reader = new FileReader();

        reader.onload = (function (theFile) {
            return function (e) {
                // Creamos la imagen.
                //document.getElementById("cola").innerHTML = ['Nombre: ', escape(theFile.name), ' || Tamanio: ', escape(theFile.size), ' bytes || type: ', escape(theFile.type), '<br /><img class="thumb" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
                document.getElementById("img_galeria1").innerHTML = ['<img class="thumb" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
            };
        })(f);

        reader.readAsDataURL(f);
    }
}

function galeria2(evt) {

    var files = evt.target.files; // FileList object
    //Obtenemos la imagen del campo "file". 
    for (var i = 0, f; f = files[i]; i++) {
        //Solo admitimos imágenes.
        if (!f.type.match('image.*')) {
            continue;
        }

        var reader = new FileReader();

        reader.onload = (function (theFile) {
            return function (e) {
                // Creamos la imagen.
                //document.getElementById("cola").innerHTML = ['Nombre: ', escape(theFile.name), ' || Tamanio: ', escape(theFile.size), ' bytes || type: ', escape(theFile.type), '<br /><img class="thumb" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
                document.getElementById("img_galeria2").innerHTML = ['<img class="thumb" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
            };
        })(f);

        reader.readAsDataURL(f);
    }
}

function galeria3(evt) {

    var files = evt.target.files; // FileList object
    //Obtenemos la imagen del campo "file". 
    for (var i = 0, f; f = files[i]; i++) {
        //Solo admitimos imágenes.
        if (!f.type.match('image.*')) {
            continue;
        }

        var reader = new FileReader();

        reader.onload = (function (theFile) {
            return function (e) {
                // Creamos la imagen.
                //document.getElementById("cola").innerHTML = ['Nombre: ', escape(theFile.name), ' || Tamanio: ', escape(theFile.size), ' bytes || type: ', escape(theFile.type), '<br /><img class="thumb" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
                document.getElementById("img_galeria3").innerHTML = ['<img class="thumb" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
            };
        })(f);

        reader.readAsDataURL(f);
    }
}