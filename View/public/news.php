<script src="Resources/public/js/new.js" type="text/javascript"></script>

<div class="row">
    <div class="col s12 m1">

    </div>
    <div class="col s12 m8">
        <br>
        <h4 class="textBoldHomeGray">NOTICIAS</h4>                
    </div>
</div>

<div class="">


    <form name="formPDF" method="post" action="System/Controller/Parameterized/CtlNew.php" target="_blank">
        <input type="hidden" name="id" value="30">
        <input type="hidden" name="action" value="GeneratePDF">
        <input type="submit" value="Generar PDF">
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

                    <div class="col s12 m5" >
                        <div class=" btn-large verdeExaudi botonExaudi textLightGreen">
                            <a href="index.php?page=contact" style="color: #FFFFFF">BLOG</a>
                        </div>
                    </div>    
                    <div class="col s12 m5">
                        <img style="width: 30px; margin-left: -40px; margin-top: -2px" src="Resources/public/image/new/iconoBotonBlog.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="whiteLineFooter"></div>




<div id="modalNoticia" class="modal modal-fixed-footer">
    <div id="FormContainer">
        <div class="modal-content">
            <input id="txtId" name="id" class="form-control identificator"  type="hidden" value="">
            <div><img style="width:200px !important; height: 30px !important;" src="Resources/public/image/logo.png" alt="Unsplashed background img 1"></div>
            <div><img style="width:700px !important; height: 400px !important;" id="imgNoticia" ></div>
            <div><h6 class="textBold" id="lblTitulo"></h6><br></div>
            <div><p style="text-align: justify !important; " id="lblDescripcion"></p></div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">X</a>
        </div>
    </div>
</div>