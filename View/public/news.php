<script src="Resources/public/js/new.js" type="text/javascript"></script>

<div class="row">
    <div class="col s12 m1">

    </div>
    <div class="col s12 m8">
        <br>
        <h6 class="textBoldHomeGray">NOTICIAS</h6>                
    </div>
</div>

<div class="">




    <form id="frmPDF" name="formPDF" method="post" action="System/Controller/Parameterized/CtlNew.php" target="_blank">
        <input type="hidden" name="id" value="30" id="idPDF">
        <input type="hidden" name="action" value="GeneratePDF">        
    </form>

    <table>
        <tr>
            <td>

                <div class="col s4 l4 m4 container">

                </div>

                <div class="col s4 l4 m4 container">
                    <div class="progress verdeExaudi">
                        <div class="indeterminate"></div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col s2 l2 m2 container">

                </div>
                <div class="section" id="lstNoticias">

                </div>

            </td>
        </tr>
        <tr>
            <td class="center">
                <ul class="pagination" id="segmentoPaginador">  

                </ul>

            </td>
        </tr>
    </table>




</div>

<div class="verdeExaudi anchoTotal">
    <div class="section">

        <div class="row">

            <div class="col s12 m1">

            </div>
            <div class="col s12 m7 textLightGreen">
                <div style="padding-bottom:50px;" class="left">
                    <p class="verdeExaudi textLightGreen">ENTERESE DE LOS AVANCES MÁS SIGNIFICATIVOS SOBRE LA ASESORÍA DE EMPRESAS FAMILIARES A TRAVÉS DE NUESTROS ARTÍCULOS, ANÁLISIS Y PUBLICACIONES ESPECIALIZADAS
                        <br>
                    </p>
                    <a href="news.php"></a>
                    <div class="col s12 m7 center-block center">
                        <a href="index.php?page=services" style="color: #FFFFFF">
                            <div class="notShadow btn-large verdeExaudi botonExaudiTeam textBoldHomeButtonTeam" style="margin-left:-5px; margin-top: -25px">BLOG</div>
                        </a>
                        <img style="width: 35px; margin-top: 5px; margin-left: 2px" src="Resources/public/image/new/iconoBotonBlog.png">
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>
<div class="whiteLineFooter"></div>




<div id="modalNoticia" class="modal modal-fixed-footer modalFullScreen">
    <div class="row">
        <div class="col s12 m12">

            <div id="FormContainer">
                <div class="modal-content">
                    <input id="txtId" name="id" class="form-control identificator"  type="hidden" value="">
                    <div><img style="width:200px !important; height: 30px !important;" src="Resources/public/image/logo.png" alt="Unsplashed background img 1"></div>

                    <div class="seleccionable">                
                        <button class="right botonInvisible">
                            <img src="Resources/public/image/download.png" onclick="generarPdf();"/>                
                        </button>
                    </div>

                    <br>

                    <div class="center">
                        <img  style="width:75% !important; height: 50% !important;" id="imgNoticia" >
                    </div>

                    <div><h6 class="textBold" id="lblTitulo"></h6><br></div>
                    <div><p style="text-align: justify !important; " id="lblDescripcion"></p></div>
                    <div><a style="text-align: justify !important; " id="urlVideo" target="_blank">Ver video</a></div>
                </div>
                <div class="modal-header" style="float:right">
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">X</a>
                </div>
            </div>

        </div>
    </div>
</div>



<!--CAMBIO OBLIGATORIO PARA ACTUALIZAR v2-->
