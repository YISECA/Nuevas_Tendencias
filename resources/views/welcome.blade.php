

@extends('master')                              
@section('content')         
<link rel="stylesheet" type="text/css" href="public/Css/form.css">
<link rel="stylesheet" type="text/css" href="public/Css/slider_styles.css">
<section id="page1">
   <div class="panel panel-default">
   <div class="panel-heading"><center><font size="5" face="arial">INSCRIPCIONES</center> </div>
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
                  <div class="wrap"><img src="public/Img/nuevas.jpg"  height="400">
                  </div>
               </li>
               <li class="elmnt-two">
                  <div class="wrap"><img src="public/Img/nuevas1.jpg"  height="400">
                  </div>
               </li>
               <li class="elmnt-three">
                  <div class="wrap"><img src="public/Img/nueva2.jpg"  height="400">
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
         <p style="line-height: 27px; font-size: 12pt; font-family:arial" align="justify">Nuevas Tendencias Deportivas Bogotá (NTD Bogotá) son todos aquellos deportes de carácter innovador y alternativo, que incentivan al aprovechamiento del ocio, tiempo libre y sana convivencia, con un componente deportivo, donde intervienen normas a cumplir y la capacidad física-técnica de los practicantes son determinantes en los resultados, estos deportes se caracterizan por que están en proceso o fuera del Sistema Nacional de Deportes.
         </p>

         <p style="line-height: 27px; font-size: 12pt;font-family:arial" align="justify"><strong>Objetivo:</strong> Fortalecer, promover y promocionar el desarrollo de las Nuevas Tendencias Deportivas de la ciudad de Bogotá. </p>

         <p style="line-height: 27px; font-size: 12pt;font-family:arial" align="justify"><strong>Cobertura:</strong> Esta capacitación va dirigida a estudiantes, deportistas,  instructores y comunidad en general que estén relacionados con los Deportes Nueva tendencias.</p>

         <p style="line-height: 27px; font-size: 12pt; font-family:arial" align="justify"><strong>Lugar:</strong> Instituto Distrital de recreación y Deporte IDRD (calle 63 No. 59A - 06) Salón Presidente</p>
         <p style="line-height: 27px; font-size: 12pt; font-family:arial" align="justify"><strong>Fecha:</strong> Miercóles 1 de Noviembre de 2017</p>
         <p style="line-height: 27px; font-size: 12pt; font-family:arial" align="justify"><strong>Hora: </strong>8:00 a.m a 5:00 p.m </p>
         </p>
         <br>
         <link rel="stylesheet" type="text/css" href="public/Css/form.css">
         <form method="POST" action="insertar" id="form_gen" enctype="multipart/form-data">
            <div class="panel-body">
               <!-- nuevo formulario-->
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title"><font size="3"color="#1995dc">INFORMACIÓN PERSONAL</font></h3>
                  </div>
                  <div class="panel-body">
                     <div class="row">
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput"><font style="font-family:arial">Nombres Completos </label>
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
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Correo Electrónico</label>
                           <input required type="mail" class="form-control" id="mail" name="mail">
                           <br>
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Télefono Celular</label>
                           <input required type="number" class="form-control" id="celular" name="celular">
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Edad</label>
                           <input required type="number" class="form-control" id="edad" name="edad" ><br>
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Grado de Estudio</label>
                           <select name="estudio" id="estudio" class="form-control" >
                              <option value="">Seleccione</option>
                              <option value="1">Bachiller</option>
                              <option value="2">Técnico</option>
                              <option value="3">Profesional</option> 
                              <option value="4">Especialista</option> 
                           </select>
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Deporte que Practica</label>
                          <input required type="text" class="form-control" id="deporte" name="deporte"><br>
                        </div>
                         <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Localidad</label>
                           <select  required name="localidad" id="localidad" class="form-control" >
                            <option value="">Seleccione</option>
                                @foreach ($localidades as $localidad)
                            <option value="{{ $localidad->id_localidad }}">{{ $localidad->localidad}}</option>
                         @endforeach
                        </select>
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
                      <div class="freebirdFormviewerViewItemsPagebreakDescriptionText"></div>
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
                                          margin: 3px;" name="acepto" id="acepto">
                                       <div class="docssharedWizToggleLabeledContent">
                                        <div class="docssharedWizToggleLabeledPrimaryText"><span dir="auto" class="docssharedWizToggleLabeledLabelText freebirdFormviewerViewItemsCheckboxLabel">Acepto</span></div>
                                       </div>
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
                        <div class="freebirdFormviewerViewNavigationButtons">
                           <input class="enviar" type="submit" value="Enviar"> 
                        </div>
                        
                     </div>
                     <div class="freebirdFormviewerViewNavigationPasswordWarning">.</div>
                  </div>
         </form>
         <script type="text/javascript" src="public/Js/form.js" ></script>
         
@stop

