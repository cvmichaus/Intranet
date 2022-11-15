<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Intranet HQA</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style type="text/css">

           /* ============ desktop view ============ */
@media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{ display: none; }
	.navbar .nav-item:hover .nav-link{   }
	.navbar .nav-item:hover .dropdown-menu{ display: block; }
	.navbar .nav-item .dropdown-menu{ margin-top:0; }
}	
/* ============ desktop view .end// ============ */
            
            </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                 <a class="navbar-brand" href="#page-top" >Hospital Angeles de Queretaro</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
               </button>
             <div class="collapse navbar-collapse" id="main_nav">
              
               <ul class="navbar-nav ms-auto">
                   <li class="nav-item"><a class="nav-link" href="#"> Home </a></li>
                   <li class="nav-item"><a class="nav-link" href="http://10.1.2.120/mayudausr/login.php" target="_blank"> Mesa de ayuda </a></li>
                   <li class="nav-item dropdown">
                       <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Control de Inf </a>
                       <ul class="dropdown-menu dropdown-menu-end">
                         <li  class="nav-link"><a class="dropdown-item" href="http://10.69.2.1/micro3_tabs_25/app_Login/app_Login.php" target="_blank"> Sistema Microbiologia</a></li>
                         <li  class="nav-link"><a class="dropdown-item" href="http://localhost/intranet2/public/assets/img/portfolio/fullsize/3.jpg" target="_blank"> Sistema Microbiologia Beta</a></li>
                         <li  class="nav-link"><a class="dropdown-item" href="http://10.69.2.1/vacunas3/app_Login/app_Login.php" target="_blank"> Sistema Vacunas</a></li>
                       </ul>
                   </li>
                   <li class="nav-item"><a class="nav-link" href="http://10.69.2.3/tarificador" target="_blank"> Tarificador </a></li>
                   <li class="nav-item"><a class="nav-link" href="http://10.69.2.1/web/" target="_blank"> Sistema Agenda </a></li>
                   <li class="nav-item"><a class="nav-link" href="http://10.69.2.1/sghaq.php" target="_blank"> SGHAQ </a></li>
                   <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Sistemas </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li  class="nav-link"><a class="dropdown-item" href="http://10.69.2.1/glpi/" target="_blank"> GLPI</a></li>
                      <li  class="nav-link"><a class="dropdown-item" href="http://10.69.2.1/ocsreports/" target="_blank"> OCS Inventory</a></li>
                      <li  class="nav-link"><a class="dropdown-item" href="http://10.69.2.1/collabtive/" target="_blank"> Project HAQ</a></li>
                    </ul>
                </li>
               </ul>
             </div> <!-- navbar-collapse.// -->
            </div> <!-- container-fluid.// -->
           </nav>
           
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Bienvenidos a Intranet HAQ</h1>
                        <hr class="divider" />
                        <div class="text-white font-weight-bold" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:14px;">
                        <script>
                        // Creamos array con los meses del año
                        const meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
                        // Creamos array con los días de la semana
                        const dias_semana = ['Domingo', 'Lunes', 'martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
                        // Creamos el objeto fecha instanciándolo con la clase Date
                        const fecha = new Date();
                        // Construimos el formato de salida
                        document.write(dias_semana[fecha.getDay()] + ', ' + fecha.getDate() + ' de ' + meses[fecha.getMonth()] + ' de ' + fecha.getUTCFullYear());                        
                        </script>

                        <br><br>
                        </div>
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5 font-weight-bold">La Intranet HAQ tiene como proposito brindar informacion y otorgar herramientas para los empleados</p>
                        <a class="btn btn-primary btn-xl" href="#portfolio">Ver Sistemas</a>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Services-->
        <section class="page-section" id="Base">
            <div class="container px-4 px-lg-6">
                <h2 class="text-center mt-0">Base de Conocimientos</h2>
                <hr class="divider" />
                

                <div class="container">
                    <div class="row">
                      <div class="col-sm">
                        
                        <div class="card" style="width: 18rem;">
                            <img src="data:image/jpeg;base64,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" class="card-img-top" alt="Chicago Skyscrapers"/>
                            <div class="card-body">
                              <h5 class="card-title">Misión</h5>
                              <p class="card-text">Ser el Sistema de Salud Privado mejor integrado con cobertura nacional, reconocido por la alta preparación y capacidad profesional de su equipo humano, la tecnología de su plataforma de servicios clínicos, el mejor servicio y la atención mas cálida.</p>
                            </div>
                            
                          </div>

                      </div>
                      <div class="col-sm">

                        <div class="card" style="width: 18rem;">
                            <img src="data:image/jpeg;base64,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" class="card-img-top" alt="Chicago Skyscrapers"/>
                            <div class="card-body">
                              <h5 class="card-title">Visión</h5>
                              <p class="card-text">
                                <ul style="list-style: none">
                                <li>Capacidad</li>
                                <li>Alta Tecnología</li>
                                <li> y Calidad en Servicios de Salud.</li>
                                </ul>
                            </p>
                            </div>
                            
                          </div>

                      </div>
                      <div class="col-sm">
                        
                        <div class="card" style="width: 18rem;">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEgS-kK3W1sYmqG3x8hbraYnXUDu6ZLQKQRA&usqp=CAU" class="card-img-top" alt="Chicago Skyscrapers"/>
                            <div class="card-body">
                              <h5 class="card-title">Valores</h5>
                              <p class="card-text">
                                <ul style="list-style: none">
                                    <li>Trabajo</li>
                                    <li>Honestidad</li>
                                    <li>Compromiso</li>
                                </ul>
                              </p>
                            </div>
                            
                          </div>


                      </div>
                    </div>
                  </div>


               

        
            </div>
        </section>

               <!-- Services-->
               <section class="page-section2 mb-4" id="#Base">
                <div class="container px-4 px-lg-6">            
                    
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                          <div class="card">
                            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFRgVFRUYGBgYGhgYGhocGBgYHBwcGhgZGRwZGhocIS4lHB4rHxkYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHxISHzQrJCs0NDExNDQ0NDE0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NTQ0NDQ0NDQ2NDQ0NDQ0NDQ0NDQ0NP/AABEIAKgBLAMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAFAAEDBAYCB//EADsQAAIBAgQEBAQEBQQDAAMAAAECAAMRBBIhMQVBUWEicYGRBjKhsRNSwdEUQmJy8COCkuGywvEHM1P/xAAZAQADAQEBAAAAAAAAAAAAAAAAAQMCBAX/xAAiEQADAQACAgMBAQEBAAAAAAAAAQIRAyESMUFRYSIEsRP/2gAMAwEAAhEDEQA/APXiYryEt2jZu0WgT3jZpDmMbMYaBPmizSAsekYsekNAnLCcM4ErV62Uayi2KYtY7GJ1hpTpdxONCC8BY/jmU2zFTfca8rytxiqbDW9+Q1v+0H0qBa11C79+d7yNU2ykwgqOLVBrnuCNPl6bWI6g85c4Rxxqgu4NuRsBpe19DA5woUaA736+9+U5GKs3hGUb22Fxpby2graBzps6WJVtjJM4mJpcRcHy+19NvaanC1i6hhzlZvTFRhczxXkOVo2VprTBNmizSHKYsh6w0CSo+g84leRshta85/DPWGgT54/4kg/DPWP+H3ho8JWfQyBBreSCnO1SJ9iObS6uwla0tCNAMYnMRjPGAl2jic8p0IAQYuhnXQ2NpnxgKVEl3cki5u5uR77bnpa805lDF4VX3AuCCDYE6ecxU6Ui86foDnHFz4UIX8zeG/ku/vb1lesecuvgspOZrwXi64YsiFSyAMyhhcA3AJG4BsfaQqWXTXwC+ItmYIOsuU6dlErUcM2a53hrD4XNYHbmf0Ewk7rEOmpWsDVlyeMLmYkLTX8zk2HoDz/aazhPDhQphCAznxO3Vzv6aADsBB3DqAfElzbJSFk2tmIsSO9sw/3TS5TO/wAXxypk4m/N6yW0a0eNMDGtFaPFADm0REeMYAUcYubYX1sPP/BK2JwxOw/zrCCrc35axVlmWtNp4ZnH4U7el+Ugw2G5a6a6m9z1h+vSLaESmqWNpKpKTRAy2EG4m3OGsQml4ExI3EjTwvKTBeIexuJpfhbiGa6E67+f/cy1dbE3j4DFGm6su4I+81FY9FcpyemxWnCOGAYbEAjyM7nWcYrRTkuI+aACIjRyY0AHjiNFAB4oooAOJZMrrvLEEI5beM8R3jOYwHMcTlo8AHc6SjiMbSRkR3VXqXyIT4mta+VRq1ri9tpR4lx8LV/h6CGtXABZVNlQHY1H2Xrbf6XGcHwFcY9q+KVGapSyUyjEpTKEFqag6+IEtf8ApaMDTYqoEpO+ViFVmsFuxsCdB1nkDV2FX+Iw6vnQ5qlMgXelU1Oik3/dR1F/Z6m0w/C6CnG13CgahFttYXzH3J9pbjmalpmKpzSaCdNEZM4sdL6S3w/Au7B2LKoGihmGY9SBsv3+9bgmCY4jFFg2QVEyX0B/0kJC9gTv1vzvNE1S2i6n6CQiVCaXv7K8lO2voEU+HinUIBJDHML8uVu8KhB0jLS1zMbn7TvNN7vsmlh0ZzFFJmhR40UAFOXGkeIwAgoPp0kjiQM4VwDzF/W4/eR4nFqh8V7dbaCZdZ7NpN+iYreCq62bSPi+MUktme2bYhWP1taQNjKbnwunlnW/tJ09RuV2SnUQPjKdrw5SAAuTp1gnGMHJI2HORpFpYExNMEaHWCqmJVD4jyv9bWkPFuI1GNqBBS9s+gUnsx+b0vA/FsHXDUsw0YM2dWL2CsqtmuoA3032MJlsdUkbnhPx0lMpQrUKwBF0qhQVZST1IJsdPDmmsq8WQoHRgVYXB6g+e08/otQXCImRM5dizlQzACxFnNzz+8jbiBFkB2Fv3+ptLeXWI53Pem0PEWc2WdtWI+dpQ4QvgB6/5eV8VibvlHle/wC0XlgTOvA4mIcHQ3EJ0K4MzYxQRReQji/iFtvaNWkN8bNleKUuH4nOt95dlU9JPpjxCNHjA6TeWJBS3kxMYmcHectvFfWI7wAdoG+K+LthqF6YBq1HWjRB2/Ee9mb+lQGY9lhdjK1emruqsoYJ49RezaqLemaAFT4e4OmGpBFuWY56lRvnqOdWdzvcm+nIWErcVxLDFYOmp1as7kf0Lhq4a/a7L6kTQX0gbC8KQ4x8TmZnVDTsT4VzBLgC2h8F/wDeZoQZxB8JmV+HqGcs9/CXqMT/AHOxAHe00fEamVGbopPsLypwLh/4NFKZ1Kr4j1Y6sff6ASk14y/tmaWtF8XOgGVfrJkQCOIH+KeNDCUGqWzNsi9+p/pGl/MDnJpNtJe2abxaFXac5YO4Fi2q0KVRmDF6aMWCsisWUElVOoF+UKQfTxgcxRRTAxRRRoAKNHM5MAOGpgsGPKZnjb/hfiVGubqji24ykqyjoPk0/qM1DkAa6QDxHF0KlRsGXAqlC4Ui/hvlJ10IN7W8+l5Pll1PRbhtKuyDglUVkYOFI0zJ8wBIvbUWIg3ifwhhnYlGqUb7qjjJ/wAWBt5Cwl+jRTDXCoVAWxC3Ic8rA3N/3heqgZQe1x6yUt5hW0vLfgxDfB9VV/08W/kyX+ob9JnOMcFxyi1StmohlzgO63QsM2hFrZb3F+U9ROgg3FUs977dInTQKUzI4zC2Yu58KXCi9lFtgOQEJ8Jw4qIxK28CooN72W5za7XLH2EhxuAUMFCgH3sO19h5Szi8W6DOGFrWyhVC+e1/rFum1KQHxFNKaE2JcM2p1AGmXKNr76794Aeu2cAb3AA9eflDXEWd0NRrZQ+WwFtcoP6wTwbD56oJF9f+yf8AOs2liI1nkz0PDuEo3JtZQCfS3uf1lCjRsL66yTFm6qnVgT6a/e3tLyJ4dR/nnJ1XwbicWg9kvvK9VLWhCqh1NpUx9QIha2Y8h3PflJosFPhjFEOUO24mrHWed/D9V0qKzte51FrCx5Dn7zfYh/DOzif8nHyrKJ7x7yCgfCJJeUJk1HeTEyCgd5LeMRGD4o4Os4U6x1OsYCJ1nFA3LN1aw8l8P3ufWc1HsCegJndJLKF6AfaAHdZ8oJ9vPlFhKARbDmST3J3M4fVgOQ1P6frLSxiIMUOvb7yVNpDjjZb9xJMPtACaZziODTFYhUbVKGVmsdGe4ZUPa2pHPMvSaGodJT4ZhPw0sTdmJZm2zMdSewvsOQsOUcvO17E1pcvHvGMUyM4jR40yMUaKMTDAHJnDOBqTacPWGwgXjOLJdKINs3iY9hKTxumZqsCYq59f5QRbvbUH3t7Tzn48pNh8fhsYumyN7k28irN7TbUcR8uU+FlIUW5gZgT6A+8G/F/Dv4jCso+YDQ9GGqn3m74/5aQorK1hmu1wrjz+ksU2DKCOkzXwlxcYnDLfR08FRTuGXQwxTxGXSeenj7O1rVhNWTTWUsm8IGsrDcA95RxLZQdd46nexTWGY4jVbPlQXY8zsoHM/tKfFAMgvUN+YAAH1ufrD4wGa5sdSbG+4/SUeI4FEW7EAagk6dt5lRRRXIOxlOm3DsiE/iLUzsDcE5iVvfn4Mo9JT4HRFO7tso+t9B7/AKSkeJhnbIfB8nMXAGjeehPpOlfwkZjYEWJuRrsT0G0vc+KWnMn5U8NHh6mYgnuYQqu4XwkKetgfS0FcOplVTMdbb8jfp6Q//DXAa5uBpblOSsdHUupRnnrutVEd2OdtB4Ry6ATv4owLqish2N9tNpYPB0OIWq7s7A6XsAPIKB7w/i6IqoVHMaTSSBswuBouTneoWI2XYDv3M9BwmIz0kY7lRfzGl/pMCylHKNbXUW/X2M2vDj/pJ2FvYmV4/ZPmS8UGKD+ESS8qYZtJNmlzmLVA7yQmQ4dtDOs00IYNqY2aRq2pjZtDABqm3qv/AJCWA0pv4tLkdxa4766Sagjc2zdNALe28ALNNeZ3Opk6yNZIsBFfH/KP7h+slo7CRY75R/cP1lTjT1Bhn/CXM5XKBcA66Egnna9u9owKfDfiAYjEVKCIcqDNnB0IuAARyvuOo6TQ2mf+DuEHD0bv/wDsqHO578l8gNJoDCs3oEMZTr4qxtLTnSB8Thqha4GYcttOo97n1iAKRRTlmtBLRiZrQdj+IBHCfzMCRJHr5icp2gL4kuwV0NnS+vbmO8tEd9k6onpY275WNntfse8GfETujpWUXKjKT/KL39jKNLFZyCnhA+ZuZ62vv/1z2l/DVhXpum9wcpPNhz18hOlT4vSbelXAYpkpl9WCuNOYUi2nvoJo8DXV0IBuG1B7GZngdsjI3cW+951hWfDVNi1Njr1S/Py62jqUxJ4B+I5+H4pq6A/hVCPxF5A7B/0PfzmjTjNN0zo4N+8JcRwqV6ZDAEEed/3nmmP4BXwzlqJLJ+W+o9D8w+vnPO5v87b2Ts4eZLqjaV+KIozO1r6hb6nv2ExvxH8UV3dKeGYoSdwBmsO5BgVXrM5Z1duZvp73lrh9RaaGuVD1apIQE3VEU87dbcjrp0meHgp1/Xo1y8i8ei02KxC2R8Q7FwrFS7czoPptK+KrOxOdixGmpJ2057f9yGzuS7m7M1+gAAsAByA6SZkJJJ53PvO58aXo5fJ/JDSHiceR/T/2hr4YpfjP+GXKNYhX31BuAw5g7ekF008RP9NpPwuqUrBhvoR53/8AsxcJrGamseo21RVoslKpZWc2QqrZGbcqPynsYWpXAtA/HnSvRpVDe4ZHpkX+c6gfQ+0NUHuBPLuVNYjuinU6ytWpty32HmdBJ/wyi5Vc+FMoGltBuTa/TnJzvfpKOKw+ZSGu19xcgbWAsNx53iRvTM4l0/GazZj76DlptNbwxbUl76+8zgwaq4XRQWA6bkDW81CkABRpbT2lONd6S5n8FvD6znE4tE+d1XzIH3nGHJvKvHOEJiqTU3HdWG6NyYftzlyAXwGJV0zowZSTYggjQ23Emz7wF8K4NsPhUovbMhcG2xu7G47G94UL6TS9GR/xN4vxNJWZ4s+kNAmpNdrdYSRbQXgjd/QwqhgBKJ2JwhkggIr435fUSRFBAjYseE+n3nQ0EYHSx7yO86vEM5qmRx6rSLPGA4qAm1xfzkWJcAXMwv8A+OsFUNSpWqI65FCJnVluXN2K5ugUD/dNpj9RaPi77M308AOPqtQcVblqRIzW/l0te3OCsRijVdjcZQTbXdTa9+o0vDJxADFGHgbQg9evlM1xjBNhnut8jfL27eU7Y/SD7IcTVtcAWJ0PfSEPh5iup0gnE1QxBtoRvLvD6mUjoZRroyFkphHcfyscw9d5UxzlkIG+lpZxRzKGHL7Sgup/X1iSBsKfD/Es3+k4sygkX2KjcDuPtA/xbjAvgTVmGtv5Qf8A2P036SZ6RBuLg7htiPL/ADnKuOZKaF2Nz13JJ+pJi8VuhvWGTxVE5CXL5VGxZrbcgTa87bDjOVtol1UdANB9BJMYj1dWFh06f9y8KXjfux+8fia0r/hWsOgiNKWympnD6QwelFha8MfDvw+9d1qt4aS3v1c7WXtfc+nlJ8P8AOJYu9xRU200LkbqDyHU+g129Ep0lRPCAqoLAAWAAGgA6Tm5Kx4ikoAfFHDWShQekl1oVM7qo1CZGS4HMC/1v1kuAxKOgdDcHWarCvpbrqD2MAcQ+HyjNVwtlLavSJsrHqp/kbt8p7Tg5eNt+SOri5El4sV9hAjcUcuwVVyXYC97+G+u+1xJsLxPMWR0anUTdHFj59x5aQXw589QLta95znQkBviGqz02ubWsbC4/wAtv6T0JqZspOpyi57gC5mYXg5qVVQWyFrtf8inX1I09Zsqw195bhW6yPO10iGist5TK9PQ+X2hAD2MvhDSmGkdV51iRlY9CL/vKL1b6jaPehHZedB9JWDzvNMjCPCku5P5R94VcW2lPhNOyX/MSfTYfYy680hDUn1sZZEHl7H1l68YhV9VPlETpGjKNIAOs6MSiRVn0gBFUeVzUjM950EjwCwNBB3EGOUsN119JfxBsIJxVYgXGoG47SnHJOmCsdkdA4NtgT0v16CcEGqjYeoPGFup3B6EH295BivBd08VJxZh+Unn5Tnh+KVgEY6qbo3MDlrOrOiW9mXZWRmRt1Nj5/5r6whhmJH25Sz8TYU5/wAQDRhr5rYX+v2nGBTwgn7zafQmEKTeEg8/P7TujSCi55XMhrYtKYuSBYeUD4rimYZmJC/yrbVuwH+bwzQL2O4kiAnWw+p5ADmYDGeq2d/9qnkP1MVKg7uHf/aoNwv/AH3hAU7RpAValKynynVOnYv3Zj9T9Z3VQuCq9/extOk10/zrGBCoIH+c5c4XwhsTUCahFszsNCAdlH9Ta+QBPY1wMzhV1tbbmToB9vcT0nhGAWkgQWvux/Mxtc/QAdgJHmvxXXs3M6zrDYVUUKqhVUAADQADlJcQPAw7Wlh15SCqPAZxaXRDw58yDqJfWp1gfhTfMO5hOk14hsg4jgKdZMroGt8p2Zb/AJWGq8tphuNcN/haiZWLI+bKT8wK2upI33uD59Jvamh7cj0P+XlTi3D1xNI02sG3VvyuPlYdvuCRJXCa/SnHyOX+GR4NiiKyDfM2X/n4T95qK3Xow+ot+szHwzTP8RlcWdA4IPJh4T9z9JrcSBkbsRM8K6N87WojqDYy7SOnY7SqmokuGblLkGccR0APe3vMhUxVU4lk2RLHQaEMoOp63NvSa/iHyeREz+LxCXyE2a2YdCLkWv10mKNS/wAHp1JKGvp6SlTeX+FrnrIOhzH/AGi/6CZA1VNMqhRsAB7RnM7kVRpUwVsSwCknkCfaXQ94Nxb+B/7T9pLhqmg8o8AKXnKwdi8fkHflM7xLij6hmsOg0+0lVqSkw6Ne2JQaZ1/5D95Uq11Y2Dr/AMh9BznnlfiAsReU1x99jaY/98+Ci4f09OAA7x/4gQB8P4xqlEFySVZluTckCzC/o1vSXzUlk/JaRpY8CGJfaBcXXyPYn5tV/qHMeYhKo5IK/wAy6eo29xAuJyVkyPzOh5qw5jvOuJOemDaz/hszpdkPzJ0B7dJVxGF0/FonMu+XcjtK9arUw7+M5hsHtoR3EloYkC5Q6OCGS+huP5TyOs6UvoiOOIhlCPzYID1DnJb0zX9JQfHimoQeJv5VG55a9B3gfjAei6ZGzKzAgNe6MP02NuoEJYTDAC+oJ3I1dvL8v+bRrsbK7I7vd/G/5Ncid279t/KXMPhCTc+Jtsx5dgOQl/D4I22yL05+ZM6qMAMqbdYDIXCpoNTILMx85JbXTUyYOqC53tADtbIO8ou4UMwFhv59veL8RnPaV8dXAIRSMw9h0J/aGAGvhDBZ6t21yeN+mY/KPQ6/7Z6Iq6XH/wAmW+B6AWgSP5nOvkAPvmPrNWptOHnraL8a/kbc25iVsWLIw7H7SWp82YesVfxITImwPw/n53hKg3iI9ZQwyWsZapt44DZbZuRkBQpqNVO/b/qdvvO1gID4jBAYlMQunhZH/qBAyP5j5T5r0lvFnwH+qw+8krU7acv3/SVxU1VDvmH2NokkjTenaKbaSRE1kpW04vrGIbH07oZ51xbiK58+wXMgubA63N/0npGIbwzy34jUCs2dfCWX8NQt7nKLk23IN/KT5F0V4vYboN4UN/mVDfzAv9bzQfDGH8buTooCg92Nz9APeZ7hCZ8NfKQysxH0Nvb6w9wzWmvS7Ej+q9r+wEzLxaZpd4aJsVTBtnT/AJCR1WBFwbjtrAWNfQ2gnA4l0qeE+HUuDsVGpPn3mpvXg3x9aaHiL2UD8x+g1nNCpsI2MswVxta/odZW4dVDsSNVQXvyJNxp1Gh1lu1Lr6JfKQviDHLTUE6228+XrBnGqJFJL/MBdvM6n6yHGAYmsiAkKr5n8kINtepyj3l/izI6trYAbzhfes7EsxGDrsSdJ3h6bcxD3wthFd3d0DKLKAwvqTe9j2H1mpbCUv8A+aX/ALF/abni8lpmuTxeAv4XBFFj1qN/4oP3hZ11nSIqLZQBzsABvEKfn9ZdLFhz09ek2MNmzryGo6jl6iAuKUyf9Wnr+YbX7+cK1qtr9P8APpBb1chNtm3Fp6ELDlpg7+LDjKwuLagwHicKyNnotprdG29DCWNQAkqdOmv+czBuLrSyJgHGYpmqLn3U3IB59L/5vNTw2toLCYnEI4csb2ZiRo3ta00eArhQPnv2Rv2ih63ppro0jPfc37bD2laq4HP0Eptim2yP11KL9C1/pEmIB3W4/pux+wH1msMkhqn+UX7yhUxGdsi+Judtl/uOwk74etU38CdOZ88uvsfec/whUBQAFHIWt6ACwgBFisaUTJTtc7udh/aBqx8tO8FUnCG4L1G3OlgT3J1+kKvhFAzNrGuqi+Ua/KOZ7+UaNG8+AqrNhULgBvxHuBsPExH0KzUOdDaZT4IQphEZzq71XPq5QfRRD+DxodnS1imU73BDXt63BHtPM5H/AGzpif5LCm/6zoDRh2Mq5spMso19exmRlGiND5yxRomc0Rr5y+i6QBkP4etzJkUTl4keAFTHaA+Yt67j6fWDA+Z28LqadrkjwsrAG6nnlP6w1i6eZTKwT9vpEx6RCvc2ttb/AOiOmpJ6SpVupt008wdpYR9IAdYh9JnqmBSsLNe6klWG4v0hTiOIyI7dAffl9ZQ4QhYX19YPDU6uxcO4caKBAxe17EgXsTfW2nrLqKqLYd/c6y2VyiUKldAfEwAFySTYADr9JGlrxGl9sgxbWBMGHFoisCCWfSw5Lv8AU/aXsVWap8l0T8zDxN/ap2HdvaZrjnEqeGGVQGc8tz5sf0lePje/v/BXfX4T8V+JsviqIMgBCUrnVv5Wb8wFuekqfCGLxNatUxLVMqEZGWwIa2yqP5QvUdbTL4bDviavjzMSdQASddlAE9H4f8OVRTVLrTUDQWzN6gaD3lObk68J7+zHHCT8q6+irXxKIWWncs5uTuT+wnGGF9Xux6Xso877wxS+HEX5nY+Vh+8vYbh1JNkBPViW++k41w0dD5pFwPCXRnsFLOSttfCFA++aEkwxAtpJMOdJYBnTK8Vhz1WvSumFW9zqfoPSTzucxiAWKW1+8EYgGNFIT/p5J9Mu+CH8A/GKbbXgDEKGJBOUHc9O8UU6+L/TdNJkb/zxKbQExL00qWR2ex3UM1/W0LYepmAsH8sjgepI1iinZx/Jy0EsJh0PzqT/AE3H/iug5a3l+jhzbZUHLmfeKKWJkppAbkmRuFEUUyAKxjZjtqNl5Du5/wDUevSU1Rs1tWdtOpPYdB2jRTLbWlJNzRxGSlSpk5RTRQf7rAsT63hj4bpkh6zC34hGX+wXy+9yfIiNFPHlurbZ33/MJIvYo6xuH4hWLKCDlIvrtcHQxRSxEmrLqD3lqm9xFFAByk5YWiigByNZE1gPOKKAFHGrfblf95XWrpFFEaRBiSH8J2JF77AA3ufaKniCrkDIKapfNscxtlAN7fm9oopO2VhewFj/AIozO1Kkhd1a2gJFrC503sSen7y4bAMfHVOZt7HZfT9Yopt9LF9GPfYO+IOMlBkojO7aAgXsTpoOZkPAPhYEl8T4ncMLXvkzA635vr6Rop08iXHEqfk54butZrODcHpYYDILvzc7+nSGVeKKSSSRRvSJolMUUALNE6SVTFFMsDotOM0aKAH/2Q==" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                            <div class="card-body">
                              <h5 class="card-title">Derechos de los Pacientes</h5>
                              <p class="card-text">
                                <ul style="list-style: decimal; " >
                                    <li style="text-align: left">Recibir la Atención Médica Adecuada.</li>
                                    <li style="text-align: left">Recibir Trato Digno y Respetuoso.</li>
                                    <li style="text-align: left">Recibir Información Suficiente, Clara, Oportuna y Veraz.</li>
                                    <li style="text-align: left">Decidir Libremente sobre su Atención.</li>
                                    <li style="text-align: left">Otorgar o no su Consentimiento Validamente Informado.</li>
                                    <li style="text-align: left">Ser Tratado con Confidencialidad.</li>
                                    <li style="text-align: left">Contar con Facilidades para Obtener una Segunda Opinion.</li>
                                    <li style="text-align: left">Recibir Atención Médica en Caso de Urgencia.</li>
                                    <li style="text-align: left">Contar con un Expediente Clínico.</li>
                                    <li style="text-align: left">Ser Atendido cuando se Inconforme con la Atención Médica Recibida.</li>
                                </ul>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRTkmbBWACXQNbFoFuLLV63foN0---yMq0sA&usqp=CAU" class="card-img-top" alt="Palm Springs Road"/>
                            <div class="card-body">
                              <h5 class="card-title">Derecho de los Médicos</h5>
                              <p class="card-text">
                                <ul style="list-style: decimal; " >
                                    <li style="text-align: left">Ejercer la profesión en forma libre y sin presiones de cualquier naturaleza..</li>
                                    <li style="text-align: left">Laborar en instalaciones apropiadas y seguras, que garanticen su práctica profesional.</li>
                                    <li style="text-align: left">Tener a disposición los recursos que requiere su práctica profesional.</li>
                                    <li style="text-align: left">Abstenerse de garantizar resultados en la atención médica.</li>
                                    <li style="text-align: left">Recibir trato respetuoso por parte de los pacientes y sus familiares, así como del personal relacionado con su trabajo profesional.</li>
                                    <li style="text-align: left">Tener acceso a educación médica continua y ser considerado en igualdad de oportunidades para su desarrollo profesional.</li>
                                    <li style="text-align: left">Tener acceso a actividades de investigación y docencia en el campo de su profesión.</li>
                                    <li style="text-align: left">Asociarse para promover sus intereses profesionales.</li>
                                    <li style="text-align: left">Salvaguardar su prestigio profesional.</li>
                                    <li style="text-align: left">Percibir remuneración por los servicios prestados.</li>
                                </ul>
                              </p>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                   
                </div>
                </div>
            </section>

        <!-- About
        <section class="page-section bg-primary" id="Manuales">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Manuales Online</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">

                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <h2 class="text-center mt-0 mt-6">Sistemas</h2>

            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-2 col-sm-6">
                        <a class="portfolio-box" href="http://10.1.2.120/mayudausr/login.php" title="Mesa de Ayuda" target="blank">
                            <img class="img-fluid w-full h-80 bg-cover bg-center" src="assets/img/portfolio/thumbnails/mesadeayuda.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Sistema</div>
                                <div class="project-name">Mesa de Ayuda</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <a class="portfolio-box" href="http://10.69.2.1/micro3_tabs_25/app_Login/app_Login.php" title="Sistema de Microbiologia" target="blank">
                            <img class="img-fluid w-full h-80 bg-cover bg-center" src="assets/img/portfolio/thumbnails/microtabs.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Control de Informacion</div>
                                <div class="project-name">Sistema Microbiologia</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg" title="Project Name" target="blank">
                            <img class="img-fluid w-full h-80 bg-cover bg-center" src="assets/img/portfolio/thumbnails/microtabs.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Control de Informacion</div>
                                <div class="project-name">Sistema Microbiologia Beta</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <a class="portfolio-box" href="http://10.69.2.1/vacunas3/app_Login/app_Login.php" title="Sistema Vacunas" target="blank">
                            <img class="img-fluid w-full h-80 bg-cover bg-center" src="assets/img/portfolio/thumbnails/vacunas3.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Control de Informacion</div>
                                <div class="project-name">Sistema Vacunas</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <a class="portfolio-box" href="http://10.69.2.3/tarificador" title="Tarificador" target="blank">
                            <img class="img-fluid w-full h-80 bg-cover bg-center" src="assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Tarificador</div>
                                <div class="project-name">Tarificador</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <a class="portfolio-box" href="http://10.69.2.1/web/" title="Agenda" target="blank">
                            <img class="img-fluid w-full h-80 bg-cover bg-center" src="assets/img/portfolio/thumbnails/agenda.png" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Sistema Agenda</div>
                                <div class="project-name">Sistema Agenda</div>
                            </div>
                        </a>
                    </div>
                     <div class="col-lg-2 col-sm-6">
                        <a class="portfolio-box" href="http://10.69.2.1/sghaq.php" title="SISTEMA GLOBAL SGHAQ" target="blank">
                            <img class="img-fluid w-full h-80 bg-cover bg-center" src="assets/img/portfolio/thumbnails/sghaq.png" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">SISTEMA GLOBAL SGHAQ</div>
                                <div class="project-name"> SISTEMA GLOBALSGHAQ</div>
                            </div>
                        </a>
                    </div>

                     <div class="col-lg-2 col-sm-6">
                        <a class="portfolio-box" href="http://10.69.2.1/glpi/" title="GLPI" target="blank">
                            <img class="img-fluid w-full h-80 bg-cover bg-center" src="assets/img/portfolio/thumbnails/glpi.png" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">SISTEMAS</div>
                                <div class="project-name">GLPI</div>
                            </div>
                        </a>
                    </div>

                     <div class="col-lg-2 col-sm-6">
                        <a class="portfolio-box" href="http://10.69.2.1/ocsreports/" title="OCS INVENTORY" target="blank">
                            <img class="img-fluid w-full h-80 bg-cover bg-center" src="assets/img/portfolio/thumbnails/ocs.png" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">SISTEMAS</div>
                                <div class="project-name">OCS INVENTORY</div>
                            </div>
                        </a>
                    </div>

                     <div class="col-lg-2 col-sm-6">
                        <a class="portfolio-box" href="http://10.69.2.1/collabtive/" title="Project HAQ" target="blank">
                            <img class="img-fluid w-full h-80 bg-cover bg-center" src="assets/img/portfolio/thumbnails/projecthaq.png" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">SISTEMAS</div>
                                <div class="project-name">Project HAQ</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-2 col-sm-6">
                        <a class="portfolio-box" href="https://gass.vidal-consult.com/login/force_login/session_expired" title="VADEMECUM" target="blank">
                            <img class="img-fluid w-full h-80 bg-cover bg-center" src="assets/img/portfolio/thumbnails/vidal.png" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">VIDAL VADEMECUM</div>
                                <div class="project-name">VIDAL VADEMECUM</div>
                            </div>
                        </a>
                    </div>
                     
                    
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-1">Dirección de Administración  <br><br>         

           
               
                <a class="btn btn-success btn-xl" href="http://localhost/DirecciondeAdministracion/" target="blank">Ver Directorio</a>
           

            </div>
        </section>
        <!-- Contact-->
       <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy;
                <script>
                var today = new Date();
                var year = today.getFullYear();
                document.write(year);
                </script>  
                - Hospital Angeles Queretaro</div></div>
        </footer>
        <!-- Bootstrap core JS-->
       
        
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script>

        $('.dropdown-toggle').dropdown()

        </script>
    </body>
</html>
