/*!
* Start Bootstrap - Agency v7.0.11 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});





function login(){
    let email = document.getElementById('email').value;
    let pass = document.getElementById('pass').value;

    var divisiones = pass.split(" ");

    if (divisiones.length > 2)
    {
        alert("Error ingrese contraseña sin espacios")
        return
    }
    
    if (email == 'cliente@test.com' || email == 'admin@test.com' ){
        if (email == 'user@test.com'){
            location.href = "/pages/admin/admin.html";   
        }
        if (email == 'admin@test.com'){
            axios.post('/auth-ok')
            .then(function (response) {
                location.href = '/productos'
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            });
            location.href = "/";   
        }
    }else{
        alert('Credenciales erradas')
    }
}

function logClose(){
    axios.post('/auth-close')
    .then(function (response) {
        location.href = '/inicio'
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    });
}
// cliente@test.com

function openForm(){
    let e = document.getElementById('form-producto');
    e.style.display = 'block' ;
}

function store(){
    
    let nombre = document.getElementById('nombre').value;
    let precio = document.getElementById('precio').value;
    let descripcion = document.getElementById('descripcion').value;
    let url_img = document.getElementById('url_img').value;

    let obj_producto = {
        nombre:nombre,
        precio:precio,
        descripcion:descripcion,
        url_img:url_img,
    }

    axios.post('/productos', obj_producto )
    .then(function (response) {
        // handle success
        console.log(response);
        let e = document.getElementById('form-producto');
        e.style.display = 'none' ;

    })
    .catch(function (error) {
        // handle error
        console.log(error);
    });
}

function update(){

    let id = document.getElementById('id_').value;
    let nombre = document.getElementById('nombre').value;
    let precio = document.getElementById('precio').value;
    let descripcion = document.getElementById('descripcion').value;
    console.log("RRR",descripcion);

    let url_img = document.getElementById('url_img').value;

    let obj_producto = {
        nombre:nombre,
        precio:precio,
        descripcion:descripcion,
        url_img:url_img,
    }

    axios.put('/productos/'+id, obj_producto )
    .then(function (response) {
        // handle success
        console.log(response);
        let e = document.getElementById('form-producto');
        e.style.display = 'none' ;

        location.href = '/productos'

    })
    .catch(function (error) {
        // handle error
        console.log(error);
    });
}

function editar(id) {
    // alert("hhh")
    location.href = "/productos/edit/"+id;  
}

function destroy(id){
    axios.delete('/productos/'+id)
    .then(function (response) {
        location.href = '/productos'
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    });
}


function apiTest() {


    const moneda_one = 'USD';

    const options = {
        method: 'GET',
        url: `https://api.exchangerate-api.com/v4/latest/${moneda_one}`
    };

    let mony = getCountryIp();
    
    axios.request(options).then( (response) => {
        
        console.log("WWW",response.data.rates.USD);

        let precio = document.getElementById('precio').value;
        
        let money_country = changeMoney( mony , response );
        // alert("TTT::"+precio*money_country)

        let value_change = money_country * precio ;
        
        document.getElementById('code').innerHTML = mony;
        document.getElementById('money').innerHTML = value_change;

    }).catch(function (error) {
        console.error(error);
    });
}

function getCountryIp() {
    

    
    return 'COP'
}

function changeMoney(mony , response) {
    let change;
    switch (mony)
    {
        case 'COP':
            change = response.data.rates.COP
        break;

        case 'MEX':
            change = response.data.rates.MEX
        break;
    
        default:

        break;
    }
    return change;
}