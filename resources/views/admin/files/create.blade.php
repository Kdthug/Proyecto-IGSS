@extends('admin.template.main')

@section('title', 'Subir Documento')

@section('h1', 'Subir Documento')

@section('content')



<form action="{{ route('admin.files.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
<input type="file" name="file" required>
</div>
<div class="form-group">
  {!! Form::label('description', 'Descripción') !!}
  {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Descripción del Documento']) !!}
</div>
<div class="form-group">
  {!! Form::label('tags', 'Tags') !!}
  {!! Form::select('tags', $tags, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un Tag']) !!}
</div>
<div class="form-group">
  <label for="menu">Categor&iacute;a</label>
  <select class="form-control" required name="menus"><option selected="selected" value="">Seleccione una Categoria</option>
    <optgroup label="Servicio de Capacitación/Postulación/Licitaciones/Cliente1/Curso1/Administrativa">
      <option value="128">Ingresados</option>
      <option value="129">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Licitaciones/Cliente1/Curso1/Técnica">
      <option value="130">Ingresados</option>
      <option value="131">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Licitaciones/Cliente1/Curso1/Económica">
      <option value="132">Oferta</option>
      <option value="133">Dimensión Económica</option>
      <option value="134">Cotizaciones</option>
      <option value="135">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Licitaciones/Cliente1/Curso1">
      <option value="75">Antecedentes</option>
    </optgroup>

    <optgroup label="Servicio de Capacitación/Postulación/Licitaciones/Cliente1/Curso2/Administrativa">
      <option value="136">Ingresados</option>
      <option value="137">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Licitaciones/Cliente1/Curso2/Técnica">
      <option value="138">Ingresados</option>
      <option value="139">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Licitaciones/Cliente1/Curso2/Económica">
      <option value="140">Oferta</option>
      <option value="141">Dimensión Económica</option>
      <option value="142">Cotizaciones</option>
      <option value="143">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Licitaciones/Cliente1/Curso2">
      <option value="79">Antecedentes</option>
    </optgroup>


    <optgroup label="Servicio de Capacitación/Postulación/Licitaciones/Cliente2/Curso1/Administrativa">
      <option value="144">Ingresados</option>
      <option value="145">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Licitaciones/Cliente2/Curso1/Técnica">
      <option value="146">Ingresados</option>
      <option value="147">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Licitaciones/Cliente2/Curso1/Económica">
      <option value="148">Oferta</option>
      <option value="149">Dimensión Económica</option>
      <option value="150">Cotizaciones</option>
      <option value="151">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Licitaciones/Cliente2/Curso1">
      <option value="83">Antecedentes</option>
    </optgroup>

    <optgroup label="Servicio de Capacitación/Postulación/Licitaciones/Cliente2/Curso2/Administrativa">
      <option value="152">Ingresados</option>
      <option value="153">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Licitaciones/Cliente2/Curso2/Técnica">
      <option value="154">Ingresados</option>
      <option value="155">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Licitaciones/Cliente2/Curso2/Económica">
      <option value="156">Oferta</option>
      <option value="157">Dimensión Económica</option>
      <option value="158">Cotizaciones</option>
      <option value="159">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Licitaciones/Cliente2/Curso2">
      <option value="87">Antecedentes</option>
    </optgroup>



    <optgroup label="Servicio de Capacitación/Postulación/Convenio Marco/Cliente1/Curso1/Administrativa">
      <option value="160">Ingresados</option>
      <option value="161">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Convenio Marco/Cliente1/Curso1/Técnica">
      <option value="162">Ingresados</option>
      <option value="163">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Convenio Marco/Cliente1/Curso1/Económica">
      <option value="164">Oferta</option>
      <option value="165">Dimensión Económica</option>
      <option value="166">Cotizaciones</option>
      <option value="167">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Convenio Marco/Cliente1/Curso1">
      <option value="91">Antecedentes</option>
    </optgroup>

    <optgroup label="Servicio de Capacitación/Postulación/Convenio Marco/Cliente1/Curso2/Administrativa">
      <option value="168">Ingresados</option>
      <option value="169">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Convenio Marco/Cliente1/Curso2/Técnica">
      <option value="170">Ingresados</option>
      <option value="171">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Convenio Marco/Cliente1/Curso2/Económica">
      <option value="172">Oferta</option>
      <option value="173">Dimensión Económica</option>
      <option value="174">Cotizaciones</option>
      <option value="175">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Convenio Marco/Cliente1/Curso2">
      <option value="95">Antecedentes</option>
    </optgroup>


    <optgroup label="Servicio de Capacitación/Postulación/Convenio Marco/Cliente2/Curso1/Administrativa">
      <option value="176">Ingresados</option>
      <option value="177">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Convenio Marco/Cliente2/Curso1/Técnica">
      <option value="178">Ingresados</option>
      <option value="179">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Convenio Marco/Cliente2/Curso1/Económica">
      <option value="180">Oferta</option>
      <option value="181">Dimensión Económica</option>
      <option value="182">Cotizaciones</option>
      <option value="183">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Convenio Marco/Cliente2/Curso1">
      <option value="99">Antecedentes</option>
    </optgroup>

    <optgroup label="Servicio de Capacitación/Postulación/Convenio Marco/Cliente2/Curso2/Administrativa">
      <option value="184">Ingresados</option>
      <option value="185">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Convenio Marco/Cliente2/Curso2/Técnica">
      <option value="186">Ingresados</option>
      <option value="187">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Convenio Marco/Cliente2/Curso2/Económica">
      <option value="188">Oferta</option>
      <option value="189">Dimensión Económica</option>
      <option value="190">Cotizaciones</option>
      <option value="191">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación/Convenio Marco/Cliente2/Curso2">
      <option value="103">Antecedentes</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Postulación">
      <option value="19">Otros</option>
    </optgroup>






    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Licitaciones/Cliente1/Curso1/Administrativa">
      <option value="192">Lista Asistencia</option>
      <option value="193">Encuestas Satisfacción</option>
      <option value="194">Pruebas Pautas</option>
      <option value="195">Programas</option>
      <option value="196">Para Impresión</option>
      <option value="197">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Licitaciones/Cliente1/Curso1/Técnica">
      <option value="198">Presentación</option>
      <option value="199">Informes Curso</option>
      <option value="200">Trabajo Grupal</option>
      <option value="201">Bibliografía</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Licitaciones/Cliente1/Curso1/Económica">
      <option value="202">Orden de Compra</option>
      <option value="203">Factura</option>
      <option value="204">Cotizaciones</option>
      <option value="205">Otros</option>
    </optgroup>

    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Licitaciones/Cliente1/Curso2/Administrativa">
      <option value="206">Lista Asistencia</option>
      <option value="207">Encuestas Satisfacción</option>
      <option value="208">Pruebas Pautas</option>
      <option value="209">Programas</option>
      <option value="210">Para Impresión</option>
      <option value="211">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Licitaciones/Cliente1/Curso2/Técnica">
      <option value="212">Presentación</option>
      <option value="213">Informes Curso</option>
      <option value="214">Trabajo Grupal</option>
      <option value="215">Bibliografía</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Licitaciones/Cliente1/Curso2/Económica">
      <option value="216">Orden de Compra</option>
      <option value="217">Factura</option>
      <option value="218">Cotizaciones</option>
      <option value="219">Otros</option>
    </optgroup>


    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Licitaciones/Cliente2/Curso1/Administrativa">
      <option value="220">Lista Asistencia</option>
      <option value="221">Encuestas Satisfacción</option>
      <option value="222">Pruebas Pautas</option>
      <option value="223">Programas</option>
      <option value="224">Para Impresión</option>
      <option value="225">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Licitaciones/Cliente2/Curso1/Técnica">
      <option value="226">Presentación</option>
      <option value="227">Informes Curso</option>
      <option value="228">Trabajo Grupal</option>
      <option value="229">Bibliografía</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Licitaciones/Cliente2/Curso1/Económica">
      <option value="230">Orden de Compra</option>
      <option value="231">Factura</option>
      <option value="232">Cotizaciones</option>
      <option value="233">Otros</option>
    </optgroup>

    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Licitaciones/Cliente2/Curso2/Administrativa">
      <option value="234">Lista Asistencia</option>
      <option value="235">Encuestas Satisfacción</option>
      <option value="236">Pruebas Pautas</option>
      <option value="237">Programas</option>
      <option value="238">Para Impresión</option>
      <option value="239">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Licitaciones/Cliente2/Curso2/Técnica">
      <option value="240">Presentación</option>
      <option value="241">Informes Curso</option>
      <option value="242">Trabajo Grupal</option>
      <option value="243">Bibliografía</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Licitaciones/Cliente2/Curso2/Económica">
      <option value="244">Orden de Compra</option>
      <option value="245">Factura</option>
      <option value="246">Cotizaciones</option>
      <option value="247">Otros</option>
    </optgroup>



    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Convenio Marco/Cliente1/Curso1/Administrativa">
      <option value="248">Lista Asistencia</option>
      <option value="249">Encuestas Satisfacción</option>
      <option value="250">Pruebas Pautas</option>
      <option value="251">Programas</option>
      <option value="252">Para Impresión</option>
      <option value="253">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Convenio Marco/Cliente1/Curso1/Técnica">
      <option value="254">Presentación</option>
      <option value="255">Informes Curso</option>
      <option value="256">Trabajo Grupal</option>
      <option value="257">Bibliografía</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Convenio Marco/Cliente1/Curso1/Económica">
      <option value="258">Orden de Compra</option>
      <option value="259">Factura</option>
      <option value="260">Cotizaciones</option>
      <option value="261">Otros</option>
    </optgroup>

    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Convenio Marco/Cliente1/Curso2/Administrativa">
      <option value="262">Lista Asistencia</option>
      <option value="263">Encuestas Satisfacción</option>
      <option value="264">Pruebas Pautas</option>
      <option value="265">Programas</option>
      <option value="266">Para Impresión</option>
      <option value="267">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Convenio Marco/Cliente1/Curso2/Técnica">
      <option value="268">Presentación</option>
      <option value="269">Informes Curso</option>
      <option value="270">Trabajo Grupal</option>
      <option value="271">Bibliografía</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Convenio Marco/Cliente1/Curso2/Económica">
      <option value="272">Orden de Compra</option>
      <option value="273">Factura</option>
      <option value="274">Cotizaciones</option>
      <option value="275">Otros</option>
    </optgroup>


    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Convenio Marco/Cliente2/Curso1/Administrativa">
      <option value="276">Lista Asistencia</option>
      <option value="277">Encuestas Satisfacción</option>
      <option value="278">Pruebas Pautas</option>
      <option value="279">Programas</option>
      <option value="280">Para Impresión</option>
      <option value="281">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Convenio Marco/Cliente2/Curso1/Técnica">
      <option value="282">Presentación</option>
      <option value="283">Informes Curso</option>
      <option value="284">Trabajo Grupal</option>
      <option value="285">Bibliografía</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Convenio Marco/Cliente2/Curso1/Económica">
      <option value="286">Orden de Compra</option>
      <option value="287">Factura</option>
      <option value="288">Cotizaciones</option>
      <option value="289">Otros</option>
    </optgroup>

    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Convenio Marco/Cliente2/Curso2/Administrativa">
      <option value="290">Lista Asistencia</option>
      <option value="291">Encuestas Satisfacción</option>
      <option value="292">Pruebas Pautas</option>
      <option value="293">Programas</option>
      <option value="294">Para Impresión</option>
      <option value="295">Otros</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Convenio Marco/Cliente2/Curso2/Técnica">
      <option value="296">Presentación</option>
      <option value="297">Informes Curso</option>
      <option value="298">Trabajo Grupal</option>
      <option value="299">Bibliografía</option>
    </optgroup>
    <optgroup label="Servicio de Capacitación/Ejecución Capacitación/Ejecución Convenio Marco/Cliente2/Curso2/Económica">
      <option value="300">Orden de Compra</option>
      <option value="301">Factura</option>
      <option value="302">Cotizaciones</option>
      <option value="303">Otros</option>
    </optgroup>




    <optgroup label="Profesionales Empresa">
      <option value="7">Certificados Profesionales</option>
      <option value="8">CV Profesionales</option>
      <option value="9">Certificados Empresa</option>
      <option value="10">CV Empresa</option>
      <option value="11">Antecedentes Tributarios Empresa</option>
    </optgroup>




    <optgroup label="Servicios de Consultoría/Diseño/Cliente1">
      <option value="34">Diseño</option>
      <option value="35">Oferta Económica</option>
      <option value="36">Apuntes</option>
    </optgroup>

    <optgroup label="Servicios de Consultoría/Diseño/Cliente2">
      <option value="37">Diseño</option>
      <option value="38">Oferta Económica</option>
      <option value="39">Apuntes</option>
    </optgroup>


    <optgroup label="Servicios de Consultoría/Ejecución/Cliente1">
      <option value="40">Calendario Ejecución</option>
      <option value="41">Económica</option>
      <option value="42">Propuesta Seleccionada</option>
      <option value="43">Convenios</option>
      <option value="44">Informes</option>
      <option value="45">Minuta Trabajo</option>
      <option value="46">Archivo Presentaciones</option>
      <option value="47">Apuntes</option>
    </optgroup>

    <optgroup label="Servicios de Consultoría/Ejecución/Cliente2">
      <option value="48">Calendario Ejecución</option>
      <option value="49">Económica</option>
      <option value="50">Propuesta Seleccionada</option>
      <option value="51">Convenios</option>
      <option value="52">Informes</option>
      <option value="53">Minuta Trabajo</option>
      <option value="54">Archivo Presentaciones</option>
      <option value="55">Apuntes</option>
    </optgroup>
    <optgroup label="Servicios de Consultoría">
      <option value="14">Otros</option>
    </optgroup>


    <optgroup label="Control Financiero">
      <option value="14">Registro Facturas</option>
      <option value="14">Registro Gastos</option>
    </optgroup>



 </select>
</div>

<div class="form-group">
  {!! Form::label('user_id', 'Usuarios') !!}
  {!! Form::select('user_id', $users, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un usuario', 'required']) !!}
</div>
<div class="form-group">
<button class="btn btn-primary" type="submit">Subir</button>
</div>
</form>

@endsection
