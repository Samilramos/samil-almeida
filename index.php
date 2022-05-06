



<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samil - personal portifolio template </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
   
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "contacto_db";

// Create connection
$conn = new mysqli($servername,$username, $password, $databasename);



if(isset($_POST["butao"])){

   $nome=$_POST["nome"];
   $contacto=$_POST["contacto"];
   $assunto=$_POST["assunto"];
   $email=$_POST["email"];
   $mensagem=$_POST["mensagem"]; 

   $sql = "INSERT INTO contactos (nome,contacto, assunto, email, mensagem)
   VALUES ('$nome','$contacto', '$assunto', '$email', '$mensagem')";

    if($conn->query($sql) === TRUE){
        echo "<script>toastr.success('Dados inseridos com sucesso.');</script>";
    }

  
}






?>


    <header> 
        <div class="hero">
            <nav>
 
                <img src="puto.png" class="logo">
                <ul>
                    <li>
                    <i class="fa fa-align-justify icon-menu" aria-hidden="true"></i>
                    </li>
                </ul>
                <ul class="menu">
                    <li > <a  href="#"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
                    <li> <a href="#sobre"><i class="fa fa-user" aria-hidden="true"></i> Sobre</a></li>
                    <li><a href="#portifolio"><i class="fa fa-briefcase" aria-hidden="true"></i> portifolio</a></li>
                    <li> <a href="#habilidades"><i class="fa fa-align-justify" aria-hidden="true"></i> Habilidades</a></li>
                    <li> <a href="#servicos"><i class="fa fa-envelope-open" aria-hidden="true"></i> Servicos</a></li>
                    <li > <a  href="#noticia"><i class="fa fa-newspaper-o"></i> Noticias</a></li>
                    <li> <a href="#contacto"><i  class="fa fa-phone" aria-hidden="true"></i> Contacto</a></li>
                </ul>
  
            </nav>
            <div class="detel">
                <img src="w.jpg" class="boy">

                <h2>Ola Sou, <br>Samil<span> Ramos de Almeida.</span></h2>
                <p>
                    Ser programador e viajar. Se voce cansar pare, respire aprenda a descansar e a nao desistir, pense no porque de estar nesse caminho.
                     Focar no que te inspira e o que te mantem motivado. A melhor forma de permanecer motivado e estar disposto a evoluir sempre.
                </p> 
              
           
            </div>
            <div class="imagem"></div>
        </div>
    </header>
        <section id="sobre">
           <h1 class="heading">SOBRE</h1>
            <div class="sobre">
                <img src="w.jpg">
                <div class="nome">
                    <h2>Samil Ramos de Almeida</h2><br>
                    <p>
                        Sou um designer e desenvolvedor web com paixao, na verdade nao e a linguagem de programacao que define o programador
                        mais sim a sua logica. Ser desenvolvedor e uma viagem onde a proxima parada e a solucao de um problema, o resultado
                        do programa e relativo ao nivel de conhecimento do programador. A questao nao e saber os codigos ou as linhas de 
                        comando, e saber oque fazer com os mesmos. E muito dificil conquistar as coisas sozinho, em equpe um motiva o outro e juntos 
                        chegamos longe. Se voce cansar pare, respire aprenda a descansar e a nao desistir, pense no porque de estar nesse caminho.
                        Focar no que te inspira e o que te mantem motivado. A melhor forma de permanecer motivado e estar disposto a evoluir sempre.
                    </p>
                    <div class="social">
                    <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i>
                    </a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i>
                    </a>
                </div>
                
                    <div id="dados">
                        <label>Anivesario</label>
                        <p>30 de janeiro 2002</p>
                        </div>
                        <div id="dados">
                            <label>Idade</label>
                            <p>20 Anos</p>
                            </div>
                            <div id="dados">
                                <label>Residencia</label>
                                <p>Maputo</p>
                                </div>
                                <div id="dados">
                                    <label>E-mail</label>
                                    <p>samilramosdealmeida@gmail.co</p>
                                    </div>
                                    <div id="dados">
                                        <label>Telefone</label>
                                        <p>842720415</p>
                                        </div>
                        <a class="btn" href="Curriculum Vitae.docx"> DOWNLOAD CV</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="portifolio">
            <h1 class="headings">PORTIFOLIO</h1>
            <p>A LEAD UX & UI DESIGNER BASED IN MAPUTO</p>
            <div class="gallery">
                <picture>
            <img width="300px" height="300px" src="relogio.jpg">
            <div class="overlay">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </p>
            </div>
        </picture>
        <picture>
            <img width="300px" height="300px" src="portfolio-6.jpg">
            <div class="overlay">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </p>
            </div>
        </picture>
        <picture>

            <img width="300px" height="300px" src="project-5.jpg">
            <div class="overlay">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </p>
            </div>
        </picture>
        <picture>

            <img width="300px" height="300px" src="portfolio-4.jpg">
            <div class="overlay">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </p>
            </div>
    </picture>
    <picture>

            <img width="300px" height="300px" src="portfolio-5.jpg">
            <div class="overlay">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </p>
            </div>
    </picture>
    <picture>
            <img width="300px" height="300px" src="project-3.jpg">
            <div class="overlay">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </p>
            </div>
    </picture>
        </section>

        


            <section id="habilidades">
                <h1 class="headings">HABILIDADES</h1>
                <p>A LEAD UX & UI DESIGNER BASED IN MAPUTO</p>

                <div class="progresso">
                    <span class="tech">html</span>
                    <span class="perc">85%</span>
                    <div class="progressbar">
                       
                        <div class="progress"></div>
                    </div>
                </div>
                <div class="progresso">
                    <span class="tech">Mysql</span>
                    <span class="perc">80%</span>
                    <div class="progressbar">
                       
                        <div class="progr"></div>
                    </div>
                </div>
               
                </div>
                <div class="progresso">
                    <span class="tech">css</span>
                    <span class="perc">75%</span>
                    <div class="progressbar">
                       
                        <div class="progre"></div>
                    </div>
                </div>
                <div class="progresso">
                    <span class="tech">javascript</span>
                    <span class="perc">50%</span>
                    <div class="progressbar">
                       
                        <div class="progres"></div>
                    </div>
                </div>
                
               
               
            </section>
            <section id="Musicas">
               <h2 class="headings"><i class="fa fa-music" aria-hidden="true"></i> Musicas Favoritas</h2><br>
                <p>A LEAD UX & UI DESIGNER BASED IN MAPUTO</p><br>

                <div class="musicas">
               
                <audio controls>
                    <source src="09 Blinding Lights - (SongsLover.com).mp3"> 
                </audio>
                <audio controls>
                    <source src="18 I Feel It Coming (feat. Daft Punk.mp3">
                </audio>
                <audio controls>
                    <source src="02 Who Needs Love.mp3"> 
                </audio>
                <br>
                <audio controls>
                    <source src="20 Abandoned (feat_ Mariah the Scientist).mp3">
                </audio>
                <audio controls>
                    <source src="dababy_rockstar_ft_roddy_rich_audio_mp3_52820.mp3">
                </audio>
                <audio controls>
                    <source src="saint_jhn_quot_trap_quot_ft._lil_baby_official_music_video_mp3_53270.mp3">
                </audio>
            </div>
            </section>

            <section id="filmes">
                <h2 class="headings"><i class="fa fa-film" aria-hidden="true"></i> Filmes Favoritos</h2>
                <p>A LEAD UX & UI DESIGNER BASED IN MAPUTO</p>

                <div class="filmes">
                   
                    <iframe width="360" height="215" src="https://www.youtube.com/embed/l4TsOFiniZA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    <iframe width="360" height="215" src="https://www.youtube.com/embed/2X7XJQN6pNU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                   
                    <iframe width="360" height="215" src="https://www.youtube.com/embed/eA3KmEhEYZU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="360" height="215" src="https://www.youtube.com/embed/O8bDI0XJOdw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="360" height="215" src="https://www.youtube.com/embed/8xV8iVvR4Yo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="360" height="215" src="https://www.youtube.com/embed/aGfZSYcy6qQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>               
                 </div>
            </section>
            
            <section id="servicos">

                <h4 class="title">
                    Servicos
                </h4>
                <div class="boxContainer">
                    <div class="serviceBox">
                        
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                        <h2>Desenvolvedor Web</h2>
                        <p>
                        atraves de uma consultoria, ajudamos voce na criacao de sites, densevolvimento de lojas virtuais,onde ajudara a 
                           divulgar seus produtos de maneira eficaz e facil.
                        </p>
                
                    </div>
                    <div class="serviceBox">
                        
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                        <h2>Front-End</h2>
                        <p>
                            Desenvolvedor em HTML, CSS e JavaScript, produzindo o layout do produto digital e criando interatividade entre os elementos da pagina ou do aplicativo.
                        </p>
                
                    </div>
                    <div class="serviceBox">
                        
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                        <h2>Back-End</h2>
                        <p>
                            Desenvolvedor back-end trabalho na parte de tras da aplicacao. Responsavel, em termos gerais, pela implementacao da regra de negocio
                            Em uma aplicacao web.
                        </p>
                
                    </div>
                    <div class="serviceBox">
                        
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                        <h2>HTML</h2>
                        <p>
                            Desenvolvedor web, que realiza o desenvolvimento de websites na internet.
                             Responsável por toda a estrutura de um determinado site.
                        </p>
                
                    </div>
                    <div class="serviceBox">
                        
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                        <h2>CSS</h2>
                        <p>
                        atraves de uma consultoria, ajudamos voce na criacao de sites, densevolvimento de lojas virtuais,onde ajudara a 
                           divulgar seus produtos de maneira eficaz e facil.
                        </p>
                
                    </div>
                    <div class="serviceBox">
                        
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                        <h2>Base de Dados</h2>
                        <p>
                            Limpar e organizar dados para descartar informações irrelevantes.
                             Analisar e interpretar os resultados usando ferramentas e técnicas estatísticas.
                             
                        </p>
                
                    </div>
                </div>
                <section id="clientes">
                    <h2>Textemunhas</h2>
               
                    <div class="clientes">
                     
                     

                    </div>

                </section>


                <section id="noticia">
        
                    <h2>News</h2>
                    <p>A LEAD UX & UI DESIGNER BASED IN MAPUTO</p>
        
                        <div class="blogs">
                            
                           <div class="blog">
                                    <img id="imagemLer" width="340px"  src="blog-3.jpg" alt="">
                               <h3> 08 April 2022</h3>
                               <h1>Make your Marketing website</h1>
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, impedit perspiciatis laudantium saepe suscipit nesciunt!
                                    Aliquid nobis dolores consequuntur dicta deserunt doloremque? Velit harum exercitationem suscipit voluptatem dolore nihil modi.  </p>
                               <a href="#" id="butaoLer"> leia mais</a>
                                
                            </div>
                            
                           <div class="blog">
                               <img id="imagemLer" width="340px"  src="blog-1.jpg" alt="">
                               <h3> 08 April 2022</h3>
                               <h1>Make your Marketing website</h1>
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, impedit perspiciatis laudantium saepe suscipit nesciunt! 
                                   Aliquid nobis dolores consequuntur dicta deserunt doloremque? Velit harum exercitationem suscipit voluptatem dolore nihil modi. 
                               </p>
                               <a href="#" id="butaoLer"> leia mais</a>                
                                
                            </div>
                            
                           <div class="blog">
                               <img id="imagemLer" width="340px"  src="blog-2.jpg" alt="">
                               <h3> 08 April 2022</h3>
                               <h1>Make your Marketing website</h1>
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, impedit perspiciatis laudantium saepe suscipit nesciunt!
                                    Aliquid nobis dolores consequuntur dicta deserunt doloremque? Velit harum exercitationem suscipit voluptatem dolore nihil modi. 
                               </p>
                               <a href="#" id="butaoLer"> leia mais</a>
                          
                            
                
                                
                            </div>
                                
                        </div>
                
                        <div class="blogoverlay">
                            <div class="icon">
                            <i class="fa fa-close" aria-hidden="true"></i>
                            </div>
                          
                            <div class="blog-conteudo">
                
                            </div>
                        </div>
                        
                    </section>
                
                    </main>
                 
                    <script>
                     let overlay=document.querySelector(".blogoverlay");
                     let conteudo=document.querySelector(".blog");
                     let icon= document.querySelector(".blogoverlay .icon");
                     let imagemLer=document.querySelector("#imagemLer");
                     let butaoLer= document.querySelector("#butaoLer");
                     icon.addEventListener("click",function(){
                        overlay.style.display="none";
                     });
                     imagemLer.addEventListener("click",function(){
                        overlay.style.display="flex";
                        
                     });
                     butaoLer.addEventListener("click",function(){
                        overlay.style.display="flex";
                        
                     });
                
                 </script>
                 <div id="ele">
            <h1 >INTERESSADO EM TRABALHAR COMIGO?</h1>
            <a id="red" href="#">CONTRATE - ME</a>
        </div>
   
                    <section id="contacto">
                        <h1 class="headings">CONTACTO</h1><br>
                        <p>A LEAD UX & UI DESIGNER BASED IN MAPUTO</p><br>
                        <h2 style="padding: 20px;"><i class="fa fa-share" aria-hidden="true"></i> Formulario</h2>
                       <form action="" class="form" method="post">
                           <input required type="text" name="nome" class="input" placeholder="Nome">
                           <input type="text" name="contacto" class="input" placeholder="Contacto">
                           <input type="text" name="assunto" class="input" placeholder="Assunto">
                           <input type="text" name="email" class="input" placeholder="E-mail">
                           <textarea name="mensagem" id="menssagem" cols="60" rows="3" placeholder="Mensagem"></textarea>
                           <input name="butao" type="submit" value="Enviar" id="submeter">
                        
                       </form>
                         
                    </section>

                    <section id="footer">
                        <h1 class="headings"><footer>Designed by <span>Samil Ramos de Almeida</span> </footer></h1>
                        <p id="copy">
                            &COPY; 2022 copyright all right reserved<br>
                                    criado por Samil Ramos de Almeida 
                        </p>
                    </section>
                
           


</body>
</html>
