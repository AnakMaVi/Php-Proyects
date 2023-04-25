function cargarGeneros(){
    gen1 = {"cod" : 1, "nombre" : "Ciencia Ficción"};
    gen2 = {"cod" : 2, "nombre" : "Comedia"};
    gen3 = {"cod" : 3, "nombre" : "Distopías"};
    gen4 = {"cod" : 4, "nombre" : "Drama"};
    gen5 = {"cod" : 5, "nombre" : "Histórica"};
    gen6 = {"cod" : 6, "nombre" : "Terror"};
    array = {gen1, gen2,gen3,gen4,gen5,gen6};
    json = json_encode(array);
    
}
function cargarGeneroLibros(){
    xmlDoc=cargaDocXML("libros.xml");
//Obtener array con todos los nodos secundarios:
nodos=xmlDoc.getElementsByTagName("libro")[0].childNodes;
var salida=""; //variable que recogerá los datos
//bucle para recorrer el array
for (i=0;i<nodos.length;i++) { 
    if (nodos[i].nodeType==1) { //sólo nodos tipo "element" (Type=1)
       nombre=nodos[i].nodeName; //Nombre de la etiqueta
       valor=nodos[i].childNodes[1].nodeValue; //texto de la etiqueta
       salida+="<p>"+nombre+": "+valor+"</p>"; //añadir a variable de salida.
       }
    }
}





