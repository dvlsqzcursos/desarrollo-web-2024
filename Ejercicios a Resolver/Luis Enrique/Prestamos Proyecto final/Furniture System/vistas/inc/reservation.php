<script>
        
    /*----------  Buscar cliente  ----------*/
    function buscar_cliente(){
        let input_cliente=document.querySelector('#input_cliente').value;

        input_cliente=input_cliente.trim();

        if(input_cliente!=""){

            let datos = new FormData();
            datos.append("buscar_cliente", input_cliente);

            fetch('<?php echo SERVERURL; ?>ajax/prestamoAjax.php',{
                method: 'POST',
                body: datos
            })
            .then(respuesta => respuesta.text())
            .then(respuesta =>{
                let tabla_clientes=document.querySelector('#tabla_clientes');
                tabla_clientes.innerHTML=respuesta;
            });

        }else{
            Swal.fire({
                title: 'Ocurrió un error inesperado',
                text: 'Debes de introducir el DNI, Nombre, Apellido o Teléfono del cliente',
                type: 'error',
                confirmButtonText: 'Aceptar'
            });
        }
    }


    /*----------  Agregar cliente  ----------*/
    function agregar_cliente(id){
        $('#ModalCliente').modal('hide');
        Swal.fire({
            title: '¿Quieres agregar este cliente?',
            text: "Se va a agregar este cliente para realizar un préstamo o una reservación",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, agregar',
            cancelButtonText: 'No, cancelar'
        }).then((result) => {
            if(result.value){

                let datos = new FormData();
                datos.append("id_agregar_cliente", id);

                fetch('<?php echo SERVERURL; ?>ajax/prestamoAjax.php',{
                    method: 'POST',
                    body: datos
                })
                .then(respuesta => respuesta.json())
                .then(respuesta =>{
                    return alertas_ajax(respuesta);
                });
                
            }else{
                $('#ModalCliente').modal('show');
            }
        });
    }


    /*----------  Buscar item  ----------*/
    function buscar_item(){
        let input_item=document.querySelector('#input_item').value;

        input_item=input_item.trim();

        if(input_item!=""){

            let datos = new FormData();
            datos.append("buscar_item", input_item);

            fetch('<?php echo SERVERURL; ?>ajax/prestamoAjax.php',{
                method: 'POST',
                body: datos
            })
            .then(respuesta => respuesta.text())
            .then(respuesta =>{
                let tabla_items=document.querySelector('#tabla_items');
                tabla_items.innerHTML=respuesta;
            });

            
        }else{
            Swal.fire({
                title: 'Ocurrió un error inesperado',
                text: 'Debes de introducir el Código o Nombre del item',
                type: 'error',
                confirmButtonText: 'Aceptar'
            });
        }
    }


    /*----------  Modales del item  ----------*/
    function modal_agregar_item(id){
        $('#ModalItem').modal('hide');
        $('#ModalAgregarItem').modal('show');
        document.querySelector('#id_agregar_item').setAttribute("value", id);
    }

    function modal_buscar_item(){
        $('#ModalAgregarItem').modal('hide');
        $('#ModalItem').modal('show');
    }
</script>