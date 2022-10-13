const main__container = document.querySelectorAll('.main__container');
main__container.forEach(value=> {
    value.addEventListener('click', (e)=>{
        if(e.target.id === 'add') location.href='formularios/agregar.html';
        if(e.target.id === 'update') location.href='formularios/actualizar.html';
        if(e.target.id === 'clear') location.href='formularios/eliminar.html';
        if(e.target.id === 'lookd') location.href='formularios/verdispositivo.html';
        if(e.target.id === 'lookr') location.href='formularios/verregistros.html';
        if(e.target.id === 'addi') location.href='formularios/agregarimpresora.html';
        if(e.target.id === 'looki') location.href='formularios/verimpresora.html';
        if(e.target.id === 'ri') location.href='formularios/regristrosimpresoras.html';
    })
})
