
     <script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/megamenu.js"></script>
    <script src="JS/paginate.js"></script>
    <script>

let options = {
    numberPerPage:10, //Cantidad de datos por pagina
    goBar:true, //Barra donde puedes digitar el numero de la pagina al que quiere ir
    pageCounter:true, //Contador de paginas, en cual estas, de cuantas paginas
};

let filterOptions = {
    el:'#searchBox' //Caja de texto para filtrar, puede ser una clase o un ID
};

paginate.init('.myTable',options,filterOptions);
</script>
    