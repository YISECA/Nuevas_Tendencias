

@extends('master')                              
@section('content')         
<link rel="stylesheet" type="text/css" href="public/Css/form.css">
<link rel="stylesheet" type="text/css" href="public/Css/slider_styles.css">
<section id="page1">
   <div class="panel panel-default">
   <div class="panel-heading"><center><font size="5" face="Comic Sans MS,arial,verdana">INSCRIPCIÓNES BUCEO - FESTIVAL DE VERANO 2017</center> </div>
   <div class="panel-body">
   <div class="freebirdFormviewerViewFormContent ">
   <div class="freebirdFormviewerViewHeaderHeader">
   <div class="freebirdFormviewerViewHeaderTitleRow">
      <br>
      <div class="stage">
      <br>
         <div id="SLDR-ONE" class="sldr">
            <ul class="wrp animate">
               <li class="elmnt-one">
                  <div class="wrap"><img src="public/Img/buceo.jpg"  height="400">
                  </div>
               </li>
               <li class="elmnt-two">
                  <div class="wrap"><img src="public/Img/buceo1.jpg"  height="400">
                  </div>
               </li>
               <li class="elmnt-three">
                  <div class="wrap"><img src="public/Img/buceo2.jpg"  height="400">
                  </div>
               </li>
            </ul>
         </div>
         <div class="clear"></div>
         <ul class="selectors">
            <li class="focalPoint"><a href="">•</a></li>
            <li><a href="">•</a></li>
            <li><a href="">•</a></li>
         </ul>
      </div>
      <script src="public/Js/jquery.sldr.js"></script>
      <div class="freebirdFormviewerViewHeaderDescription" dir="auto">
         <br>
         <p style="line-height: 27px; font-size: 11pt" align="justify">El buceo es el placer infinito de de sentir la ingravidez, cuando lo practicas con tanque de aire comprimido, resulta un tanto más fácil y te permite disfrutar por más tiempo del bellísimo universo submarino.
            Queremos invitar los participantes del festival de verano de Bogotá a descubrir la sensación de bucear en una piscina de poca profundidad. La idea es que se disfrute de ponerse un equipo de buceo y experimentar la sensación de respirar bajo el agua con el acompañamiento de un instructor de buceo de BUCONOS. 
         </p>
         <br>
         <p style="line-height: 27px; font-size: 11pt" align="justify"><strong>Importante:</strong> La actividad es 100% recreativa y que comprenderá una instrucción técnica mínima para que la práctica se lleve a cabo con seguridad y disfrute pero que no es en ningún momento una formación en buceo ni otorgará ningún tipo de certificación formal. </p>
         <br>
         <p style="line-height: 27px; font-size: 11pt" align="justify"><strong>Requisitos:</strong>
         <li style=" line-height: 27px;font-size: 11pt; " align="justify">Saber nadar estilo libre</li>
         <li style=" line-height: 27px;font-size: 11pt; " align="justify">Ser mayor de 14 años</li>
         <li style=" line-height: 27px;font-size: 11pt; " align="justify">Autorización de los padres para menores de edad</li>
         <li style=" line-height: 27px;font-size: 11pt; " align="justify">Haber realizado pre inscripción en la página del IDRD</li>
         </p>
         <br>
         <link rel="stylesheet" type="text/css" href="public/Css/form.css">
         <form method="POST" action="insertar" id="form_gen" enctype="multipart/form-data">
         <input type="hidden" name="horas-json" id="horas-json" value="{{ $horas }}"></input>
            <div class="panel-body">
               <!-- nuevo formulario-->
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title"><font size="3"color="#1995dc">INFORMACIÓN PERSONAL</font></h3>
                  </div>
                  <div class="panel-body">
                     <div class="row">
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Nombres Completos </label>
                           <input required type="text" class="form-control" id="nombre" name="nombre" onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Apellidos Completos</label>
                           <input required type="text" class="form-control" id="apellido" name="apellido" onkeyup="javascript:this.value=this.value.toUpperCase();" ><br>
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Documento de Identificación </label>
                           <input required type="text" class="form-control" id="cedula" name="cedula">
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Email</label>
                           <input required type="mail" class="form-control" id="mail" name="mail">
                           <br>
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Télefono</label>
                           <input required type="number" class="form-control" id="telefono" name="telefono">
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">EPS</label>
                           <input required type="text" class="form-control" id="eps" name="eps" onkeyup="javascript:this.value=this.value.toUpperCase();" ><br>
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Fecha de Buceo</label>
                           <select name="fecha" id="fecha" class="form-control" >
                              <option value="">Seleccione</option>
                                 @foreach ($fechas as $fecha)
                                     <option value="{{ $fecha->id }}">{{ $fecha->fecha}}</option>
                                 @endforeach
                           </select>
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Horario de Buceo </label>
                           <select  required name="hora" id="hora" class="form-control" >
                              <option value="">Seleccione</option>           
                         </select><br>
                        </div>
               </div>
               <br>
            
               </fieldset>
               <div class="freebirdFormviewerViewFormContent ">
                  <div class="freebirdFormviewerViewHeaderHeader">
                     <div class="freebirdFormviewerViewHeaderTitleRow">
                        <div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"></div>
                     </div>
                     <div class="freebirdFormviewerViewHeaderRequiredLegend" aria-hidden="true" dir="auto"></div>
                  </div>
                  <div class="freebirdFormviewerViewItemList" role="list">
                     <div class="freebirdMaterialHeaderbannerLabelContainer freebirdFormviewerViewItemsPagebreakBanner" jsname="bLLMxc" role="heading">
                        <div class="freebirdMaterialHeaderbannerLabelTextContainer freebirdSolidBackground freebirdMaterialHeaderbannerPagebreakBanner">
                           <div class="freebirdMaterialHeaderbannerPagebreakText freebirdFormviewerViewItemsPagebreakBannerText"></div>
                        </div>
                     </div>
                      <!-- <div class="freebirdFormviewerViewItemsPagebreakDescriptionText"></div>
                     <div role="listitem" class="freebirdFormviewerViewItemsItemItem" jsname="ibnC6b" jscontroller="hIYTQc" jsaction="JIbuQc:qzJD1c;sPvj8e:e4JwSe" data-required="true" data-other-input="qSV85" data-other-hidden="MfYA1e" data-item-id="131124881">
                        <div class="freebirdFormviewerViewItemsItemItemheader">
                           <div class="freebirdFormviewerViewItemsItemItemTitleContainer">
                              <div class="freebirdFormviewerViewItemsItemItemTitle" dir="auto" id="i1" role="heading" aria-level="2" aria-describedby="i.desc.131124881">Términos de inscripción <span class="freebirdFormviewerViewItemsItemRequiredAsterisk" aria-hidden="true">*</span><br><br><br><br><br></div>
                              <div class="freebirdFormviewerViewItemsItemItemHelpText" id="i.desc.131124881" dir="auto">Usted acepta y cumple con los requisitos exigidos  al inicio de este proceso de pre-inscripción</div>
                           </div>
                        </div>
                        <div jsname="JNdkSc" role="group" aria-labelledby="i1" aria-describedby="i.desc.131124881 i.err.131124881 i.req.131124881" class="">
                           <div class="" jsname="MPu53c" jscontroller="GJQA8b" jsaction="JIbuQc:aj0Jcf" data-value="Acepto">
                              <div class="freebirdFormviewerViewItemsCheckboxChoice">
                                 <label class="docssharedWizToggleLabeledContainer freebirdFormviewerViewItemsCheckboxContainer">
                                    <div class="exportLabelWrapper">
                                       <input type="checkbox" required style="float: left;
                                          margin: 0px;" name="acepto" id="acepto">
                                       <div class="docssharedWizToggleLabeledContent">
                                        <div class="docssharedWizToggleLabeledPrimaryText"><span dir="auto" class="docssharedWizToggleLabeledLabelText freebirdFormviewerViewItemsCheckboxLabel">Acepto</span></div>
                                       </div>-->
                                    </div>
                                 </label>
                              </div>
                              <input name="entry.1642827248" jsname="ekGZBc" disabled="" type="hidden">
                           </div>
                        </div>
                        <div id="i.req.131124881" class="screenreaderOnly"></div>
                        <div jsname="XbIQze" class="freebirdFormviewerViewItemsItemErrorMessage" id="i.err.131124881" role="alert"></div>
                     </div>
                  </div>
                  <div class="freebirdFormviewerViewNavigationNavControls" jscontroller="lSvzH" jsaction="rcuQ6b:npT2md;JIbuQc:V3upec(GeGHKb),HiUbje(M2UYVd),NPBnCf(OCpkoe)" data-shuffle-seed="-2327421662174229681">
                     <div class="freebirdFormviewerViewNavigationButtonsAndProgress">
                        <!--<div class="freebirdFormviewerViewNavigationButtons">
                           <input class="enviar" type="submit" value="Enviar"> 
                        </div>-->
                        
                     </div>
                     <div class="freebirdFormviewerViewNavigationPasswordWarning">.</div>
                  </div>
         </form>
         <script type="text/javascript" src="public/Js/form.js" ></script>
         
@stop

