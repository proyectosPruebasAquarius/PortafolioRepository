var CurrentURL = window.location.pathname;


const home = document.getElementById('inicio');
const services = document.getElementById('servicios');
const about = document.getElementById('nosotros');
const proyect = document.getElementById('proyectos')


switch (CurrentURL) {
    case '/':
      home.classList.add('active')
      break;
    case '/servicios':
      services.classList.add('active')
    break;
    
    case '/sobre-nosotros':
      about.classList.add('active');
      break;
      case '/proyectos':
        proyect.classList.add('active');
        break;
  }


