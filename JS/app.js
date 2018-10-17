function mostrar() 
{ 
    var rfc=document.getElementById("rfc"); 
    var nombre=document.getElementById("nombre"); 
    var apellidos=document.getElementById("apellidos"); 
    var empleado=document.getElementById("numemp");
    var curp=document.getElementById("curp");
    var localidad=document.getElementById("localidad");
    var postal=document.getElementById("postal");
    var municipio=document.getElementById("municipio");
    var entidad=document.getElementById("entidad");
    var salario=document.getElementById("salario");
    var jornada=document.getElementById("jornada");
    var puesto=document.getElementById("puesto");
    var nacimiento=document.getElementById("nacimiento");
    var civil=document.getElementById("civil");
    var telefono=document.getElementById("telefono");

     document.write( 
    "<table cellpadding='5' cellspacing='0' border='1'>" + 
    "<tr><td>RFC</td><td>Nombre</td><td>Apellidos</td><td>No empleado</td><td>CURP</td><td>Localidad</td><td>Codigo Postal</td><td>Municipio</td><td>Entidad Federativa</td><td>Salario</td><td>Tipo de Jornada</td><td>Puesto</td><td>Fecha nacimiento</td><td>Estado Civil</td><td>Telefono</td></tr>"+


    "<tr><td>"+rfc.value+"</td><td>"+nombre.value+"</td><td>"+apellidos.value+"</td><td>"+numemp.value+"</td><td>"+curp.value+"</td><td>"+localidad.value+"</td><td>"+postal.value+"</td><td>"+municipio.value+"</td><td>"+entidad.value+"</td><td>"+salario.value+"</td><td>"+jornada.value+"</td><td>"+puesto.value+"</td><td>"+nacimiento.value+"</td><td>"+civil.value+"</td><td>"+telefono.value+"</td></tr></table>" 
    ); 

     for(var i=0;i<qs.length;i++){
if(qs.substring(i,i+1)=="+"){
s=s+" ";
}else{
s=s+qs.substring(i,i+1);
}
}
return s;
}
var c=eval('"'+document.location+'"');
var n,m,o;
var variable;
var valor;
n=c.indexOf("?");
if(n==-1){
    }else{
        while(n<c.length){
            m=c.indexOf("=",n);
            variable=c.substring(n+1,m);
            o=c.indexOf("&",m);
            if(o==-1){o=c.length;
                }
                valor=unescape(RecibirVariablesJs(c.substring(m+1,o)));
                eval ("var "+variable+"='"+valor+"';");
                n=o;}
} 
