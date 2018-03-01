<script src="Resources/public/js/contacto.js" type="text/javascript"></script>


<div class=" backgroundContacts">
    <div class="section">
        <div class="row">
            <div class="col m2 s12">

            </div>

            <div class="col m10 s12">
                <h3><i class="mdi-content-send brown-text"></i></h3>
                <h6 class="textBoldHomeGray">CONTACTO</h6>                
            </div>
        </div>

    </div>
</div>



<div class="verdeExaudi anchoTotal alturaSectionContact" style="background-image: url('Resources/public/image/contact/map.png'); ">
    <div class="section" id="ModalNew">

        <div class="row">
            <div class="col s4 l4 m4 container">

            </div>

            <div class="col s4 l4 m4 container">
                <div class="progress">
                    <div class="indeterminate"></div>
                </div>
            </div>
        </div>


        <div class="row" id="FormContainer" >

            <div class="input-field col s12 m1">                
            </div>

            <div class="input-field col s12 m1">
                <img style="width: 90px;" src="Resources/public/image/contact/info.png">
            </div>

            <div class="input-field col s12 m4 textLightGreen" style="padding-right: 30px;">
                <h6 class="textLightGreenContact">NOMBRE</h6>
                <input class="white black-text notShadow notLine" required id="txtNombre" name="nombre" type="text" value="" autocomplete="off">

                <h6 class="textLightGreenContact labelContacto">EMAIL</h6>
                <input class="white black-text notShadow notLine" required id="txtEmail" name="email" type="email" value="" autocomplete="off" >

                <h6 class="textLightGreenContact labelContacto">ORGANIZACION</h6>
                <input class="white black-text notShadow notLine" required id="txtOrganizacion" name="organizacion" type="text" value="" autocomplete="off" >
            </div>

            <div class="input-field col s12 m4">
                <h6 class="textLightGreenContact notShadow notLine">MENSAJE</h6>
                <textarea id="txtMensaje" required name="mensaje" class="white black-text materialize-textarea" value="" autocomplete="off"></textarea>                                                             


                <br>

                <div class="notShadow btn-large verdeExaudi botonExaudi textLightGreen" onclick="save();">
                    ENVIAR
                </div>

                <br>
                <br>

                <div class="textLightGreenContact">
                    SIGANOS EN NUESTRAS REDES SOCIALES
                </div>

            </div>

            <div class="input-field col s12 m2">
            </div>
        </div>
    </div>
</div>

<!--END VALORES EXAUDI-->
<div class="whiteLineFooter "></div>

