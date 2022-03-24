var modal = (type, id, data) => {
    
    let modal = document.getElementById('proyectosF');
    let btn = document.getElementById('btnSOU');
    let img = document.getElementById('wrapperImg');
    let title = document.getElementById('myModalLabel');

    switch (type) {
        case 'update':

                let child1 = document.getElementsByName('_method')
                if (child1[0] == null) {
                    let tokenPos = document.getElementsByName('_token');
                let newInput = document.createElement('input');
                newInput.setAttribute('type', 'hidden');
                newInput.setAttribute('name', '_method');
                newInput.setAttribute('value', 'PUT');
                modal.appendChild(newInput);
                //modal.insertBefore(newInput, tokenPos[0]);        
                }
                
                $('#myModal').modal('toggle');
                modal.action = `/proyectos/${id}`;               
                btn.value = 'Actualizar';                
                if (data) {
                    title.innerHTML = `Actualizar ${data.nombre}`;
                    console.log(data['id']);
                    document.getElementById('nombre').value = data['nombre'];
                    document.getElementById('url').value = data['url'];
                    document.getElementById('descripcion').value = data['descripcion'];
                    data.visible == 1 ? document.getElementById('flexCheckChecked').checked = true : document.getElementById('flexCheckChecked').checked = false;
                    if (JSON.parse(data.imagen).length > 0) {
                        img.innerHTML = '';
                        let count = 0;
                        let divI = 0;
                        localStorage.setItem('content', data.imagen);
                        JSON.parse(data.imagen).forEach(element => {
                            
                            console.log(element);
                            let dt = document.createElement('img');
                            let div = document.createElement('div');
                            let btn = document.createElement('button');
                            let i = document.createElement('i');
                            div.setAttribute('class', 'container__img');
                            i.setAttribute('class', 'icon-close text-primary');
                            //btn.textContent = 'X';
                            i.setAttribute('id', divI++);
                            btn.appendChild(i);
                            btn.setAttribute('type', 'button');
                            btn.addEventListener('click', (event) => {
                                tmpDelete(data.id, element, event.target.id);
                               // console.log(event.target.id);
                            },false);
                            dt.setAttribute('src', 'http://127.0.0.1:8000'+element); //= 'http://127.0.0.1:8000'+element;
                            dt.setAttribute('class', 'media-object  gallery__img');
                            div.setAttribute('id', `div${count++}`);
                            div.appendChild(dt);
                            div.appendChild(btn);
                            img.appendChild(div);
                            
                        });
                    } else {
                        img.innerHTML = '';
                    }
                }
                                
            break;
    
        default:

            img.innerHTML = '';
            title.innerText = 'Guardar Formulario';
            let child = document.getElementsByName('_method');
            console.log(child[0]);
            modal.removeChild(child[0]);
            modal.action = `/proyectos`;            
            btn.value = 'Guardar';
                modal.reset();
            break;
    }
};

var tmpDelete = async (id, element, target_id) => {

    let div = document.getElementById(`div${target_id}`);
    let local = JSON.parse(localStorage.content);
    

    if (div.classList.contains('container__img__active')) {
        div.classList.remove('container__img__active'); 
        local.push(element);
        localStorage.setItem('content', JSON.stringify(local));       
    } else {        

        div.className += ' container__img__active';   

        let data = local.filter(e => e !== element);
        console.log({
            'dataNew' : data,
            'dataOld': local
        });
        localStorage.setItem('content', JSON.stringify(data));

    }
    
    const rawResponse = await fetch(`http://127.0.0.1:8000/proyectos/${id}`, {
        method: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'Accept': 'application/json, text-plain, */*',
                "X-Requested-With": "XMLHttpRequest",
                'Content-Type': 'application/json'
            },
            credentials: "same-origin",
            body: JSON.stringify({
                a: element,
                b: JSON.parse(localStorage.content)
            })
        });
        const content = await rawResponse.json();

        console.log(content);

};

/* proyectos detail */
$('.slide-nav').on('click', function(e) {
    e.preventDefault();
    // get current slide
    var current = $('.flex--active').data('slide'),
      // get button data-slide
      next = $(this).data('slide');
  
    $('.slide-nav').removeClass('active');
    $(this).addClass('active');
  
    if (current === next) {
      return false;
    } else {
      $('.slider__warpper').find('.flex__container[data-slide=' + next + ']').addClass('flex--preStart');
      $('.flex--active').addClass('animate--end');
      setTimeout(function() {
        $('.flex--preStart').removeClass('animate--start flex--preStart').addClass('flex--active');
        $('.animate--end').addClass('animate--start').removeClass('animate--end flex--active');
      }, 800);
    }
  });

var deleteElement = async (id) => {
    
    if (confirm('¿Estas seguro que deseas borrar el proyecto?')) {
        // Save it!
        const rawResponse = await fetch(`http://127.0.0.1:8000/proyectos/${id}`, {
        method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'Accept': 'application/json, text-plain, */*',
                "X-Requested-With": "XMLHttpRequest",
                'Content-Type': 'application/json'
            },
            credentials: "same-origin",            
        });
        const content = await rawResponse.json();

        console.log(content);
        location.reload();
    } else {
        // Do nothing!
        console.log('Thing was not saved to the database.');
    }

}