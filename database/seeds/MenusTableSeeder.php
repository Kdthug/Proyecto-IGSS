<?php
use App\Menu;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $m1 = factory(Menu::class)->create([
          'name' => 'Servicios de Capacitación',
          'slug' => 'servicio_capacitacion',
          'parent' => 0,
          'order' => 0,
      ]);
      $m2 = factory(Menu::class)->create([
          'name' => 'Profecionales Empresa',
          'slug' => 'profesionales_empresa',
          'parent' => 0,
          'order' => 1,
      ]);
      $m3 = factory(Menu::class)->create([
          'name' => 'Servicios de Consultoría',
          'slug' => 'servicio_consultoria',
          'parent' => 0,
          'order' => 2,
      ]);
      $m4 = factory(Menu::class)->create([
          'name' => 'Control Financiero',
          'slug' => 'control_financiero',
          'parent' => 0,
          'order' => 3,
      ]);
      $m11 = factory(Menu::class)->create([
          'name' => 'Postulación',
          'slug' => 'postulacion',
          'parent' => $m1->id,
          'order' => 0,
      ]);
      $m12 = factory(Menu::class)->create([
          'name' => 'Ejecución Capacitación',
          'slug' => 'ejecucion_capacitacion',
          'parent' => $m1->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Certificados Profesionales',
          'slug' => 'certificados_profesionales',
          'parent' => $m2->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'CV Profesionales',
          'slug' => 'cv_profesionales',
          'parent' => $m2->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Certificados Empresa',
          'slug' => 'certificados_empresa',
          'parent' => $m2->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'CV Empresa',
          'slug' => 'cv_empresa',
          'parent' => $m2->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Antecedentes Tributarios Empresa',
          'slug' => 'antecedentes_tributarios_empresa',
          'parent' => $m2->id,
          'order' => 4,
      ]);
      $m31 = factory(Menu::class)->create([
          'name' => 'Diseño',
          'slug' => 'diseño',
          'parent' => $m3->id,
          'order' => 0,
      ]);
      $m32 = factory(Menu::class)->create([
          'name' => 'Ejecución',
          'slug' => 'ejecucion',
          'parent' => $m3->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => 'otros',
          'parent' => $m3->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Registro Facturas',
          'slug' => 'registro_facturas',
          'parent' => $m4->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Registro Gastos',
          'slug' => 'registro_gastos',
          'parent' => $m4->id,
          'order' => 1,
      ]);
      $m111 = factory(Menu::class)->create([
          'name' => 'Licitaciones',
          'slug' => 'licitaciones',
          'parent' => $m11->id,
          'order' => 0,
      ]);
      $m112 = factory(Menu::class)->create([
          'name' => 'Convenio Marco',
          'slug' => 'convenio_marco',
          'parent' => $m11->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '1otros',
          'parent' => $m11->id,
          'order' => 2,
      ]);
      $m121 = factory(Menu::class)->create([
          'name' => 'Ejecución Licitaciones',
          'slug' => 'ejecucion_licitaciones',
          'parent' => $m12->id,
          'order' => 0,
      ]);
      $m122 = factory(Menu::class)->create([
          'name' => 'Ejecución Convenio Marco',
          'slug' => 'ejecucion_convenio_marco',
          'parent' => $m12->id,
          'order' => 1,
      ]);
      $m311 = factory(Menu::class)->create([
          'name' => 'Cliente1',
          'slug' => 'cliente1',
          'parent' => $m31->id,
          'order' => 0,
      ]);
      $m312 = factory(Menu::class)->create([
          'name' => 'Cliente2',
          'slug' => 'cliente2',
          'parent' => $m31->id,
          'order' => 1,
      ]);
      $m321 = factory(Menu::class)->create([
          'name' => 'Cliente1',
          'slug' => '1cliente1',
          'parent' => $m32->id,
          'order' => 0,
      ]);
      $m322 = factory(Menu::class)->create([
          'name' => 'Cliente2',
          'slug' => '1cliente2',
          'parent' => $m32->id,
          'order' => 1,
      ]);
      $m1111 = factory(Menu::class)->create([
          'name' => 'Cliente1',
          'slug' => '2cliente1',
          'parent' => $m111->id,
          'order' => 0,
      ]);
      $m1112 = factory(Menu::class)->create([
          'name' => 'Cliente2',
          'slug' => '2cliente2',
          'parent' => $m111->id,
          'order' => 1,
      ]);
      $m1121 = factory(Menu::class)->create([
          'name' => 'Cliente1',
          'slug' => '3cliente1',
          'parent' => $m112->id,
          'order' => 0,
      ]);
      $m1122 = factory(Menu::class)->create([
          'name' => 'Cliente2',
          'slug' => '3cliente2',
          'parent' => $m112->id,
          'order' => 1,
      ]);
      $m1211 = factory(Menu::class)->create([
          'name' => 'Cliente1',
          'slug' => '4cliente1',
          'parent' => $m121->id,
          'order' => 0,
      ]);
      $m1212 = factory(Menu::class)->create([
          'name' => 'Cliente2',
          'slug' => '4cliente2',
          'parent' => $m121->id,
          'order' => 1,
      ]);
      $m1221 = factory(Menu::class)->create([
          'name' => 'Cliente1',
          'slug' => '5cliente1',
          'parent' => $m122->id,
          'order' => 0,
      ]);
      $m1222 = factory(Menu::class)->create([
          'name' => 'Cliente2',
          'slug' => '5cliente2',
          'parent' => $m122->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Diseño',
          'slug' => '1diseño',
          'parent' => $m311->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Oferta Económica',
          'slug' => 'oferta_economica',
          'parent' => $m311->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Apuntes',
          'slug' => 'apuntes',
          'parent' => $m311->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Diseño',
          'slug' => '2diseño',
          'parent' => $m312->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Oferta Económica',
          'slug' => '2oferta_economica',
          'parent' => $m312->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Apuntes',
          'slug' => '2apuntes',
          'parent' => $m312->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Calendario Ejecución',
          'slug' => 'calendario_ejecucion',
          'parent' => $m321->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Económica',
          'slug' => '1economica',
          'parent' => $m321->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Propuesta Seleccionada',
          'slug' => 'propuesta_selecionada',
          'parent' => $m321->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Convenios',
          'slug' => '3convenios',
          'parent' => $m321->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Informes',
          'slug' => 'informes',
          'parent' => $m321->id,
          'order' => 4,
      ]);
      factory(Menu::class)->create([
          'name' => 'Minutas Trabajo',
          'slug' => 'minutas_trabajo',
          'parent' => $m321->id,
          'order' => 5,
      ]);
      factory(Menu::class)->create([
          'name' => 'Archivo Presentaciones',
          'slug' => 'archivo_presentaciones',
          'parent' => $m321->id,
          'order' => 6,
      ]);
      factory(Menu::class)->create([
          'name' => 'Apuntes',
          'slug' => '5apuntes',
          'parent' => $m321->id,
          'order' => 7,
      ]);
      factory(Menu::class)->create([
          'name' => 'Calendario Ejecución',
          'slug' => '1calendario_ejecucion',
          'parent' => $m321->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Económica',
          'slug' => '9economica',
          'parent' => $m322->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Propuesta Seleccionada',
          'slug' => '9propuesta_selecionada',
          'parent' => $m322->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Convenios',
          'slug' => '11convenios',
          'parent' => $m322->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Informes',
          'slug' => '322informes',
          'parent' => $m322->id,
          'order' => 4,
      ]);
      factory(Menu::class)->create([
          'name' => 'Minutas Trabajo',
          'slug' => '322minutas_trabajo',
          'parent' => $m322->id,
          'order' => 5,
      ]);
      factory(Menu::class)->create([
          'name' => 'Archivo Presentaciones',
          'slug' => '322archivo_presentaciones',
          'parent' => $m322->id,
          'order' => 6,
      ]);
      factory(Menu::class)->create([
          'name' => 'Apuntes',
          'slug' => '322apuntes',
          'parent' => $m322->id,
          'order' => 7,
      ]);
      $m11111 = factory(Menu::class)->create([
          'name' => 'Curso1',
          'slug' => '1111curso1',
          'parent' => $m1111->id,
          'order' => 0,
      ]);
      $m11112 = factory(Menu::class)->create([
          'name' => 'Curso2',
          'slug' => '1111curso2',
          'parent' => $m1111->id,
          'order' => 1,
      ]);
      $m11121 = factory(Menu::class)->create([
          'name' => 'Curso1',
          'slug' => '1112curso1',
          'parent' => $m1112->id,
          'order' => 0,
      ]);
      $m11122 = factory(Menu::class)->create([
          'name' => 'Curso2',
          'slug' => '1112curso2',
          'parent' => $m1112->id,
          'order' => 1,
      ]);
      $m11211 = factory(Menu::class)->create([
          'name' => 'Curso1',
          'slug' => '1121curso1',
          'parent' => $m1121->id,
          'order' => 0,
      ]);
      $m11212 = factory(Menu::class)->create([
          'name' => 'Curso2',
          'slug' => '1121curso2',
          'parent' => $m1121->id,
          'order' => 1,
      ]);
      $m11221 = factory(Menu::class)->create([
          'name' => 'Curso1',
          'slug' => '1122curso1',
          'parent' => $m1122->id,
          'order' => 0,
      ]);
      $m11222 = factory(Menu::class)->create([
          'name' => 'Curso2',
          'slug' => '1122curso2',
          'parent' => $m1122->id,
          'order' => 1,
      ]);
      $m12111 = factory(Menu::class)->create([
          'name' => 'Curso1',
          'slug' => '1211curso1',
          'parent' => $m1211->id,
          'order' => 0,
      ]);
      $m12112 = factory(Menu::class)->create([
          'name' => 'Curso2',
          'slug' => '1211curso2',
          'parent' => $m1211->id,
          'order' => 1,
      ]);
      $m12121 = factory(Menu::class)->create([
          'name' => 'Curso1',
          'slug' => '1212curso1',
          'parent' => $m1212->id,
          'order' => 0,
      ]);
      $m12122 = factory(Menu::class)->create([
          'name' => 'Curso2',
          'slug' => '1212curso2',
          'parent' => $m1212->id,
          'order' => 1,
      ]);
      $m12211 = factory(Menu::class)->create([
          'name' => 'Curso1',
          'slug' => '1221curso1',
          'parent' => $m1221->id,
          'order' => 0,
      ]);
      $m12212 = factory(Menu::class)->create([
          'name' => 'Curso2',
          'slug' => '1221curso2',
          'parent' => $m1221->id,
          'order' => 1,
      ]);
      $m12221 = factory(Menu::class)->create([
          'name' => 'Curso1',
          'slug' => '1222curso1',
          'parent' => $m1222->id,
          'order' => 0,
      ]);
      $m12222 = factory(Menu::class)->create([
          'name' => 'Curso2',
          'slug' => '1222curso2',
          'parent' => $m1222->id,
          'order' => 1,
      ]);
      $m111111 = factory(Menu::class)->create([
          'name' => 'Administrativa',
          'slug' => '11111administrativa',
          'parent' => $m11111->id,
          'order' => 0,
      ]);
      $m111112 = factory(Menu::class)->create([
          'name' => 'Técnica',
          'slug' => '11111tecnica',
          'parent' => $m11111->id,
          'order' => 1,
      ]);
      $m111113 = factory(Menu::class)->create([
          'name' => 'Económica',
          'slug' => '11111economica',
          'parent' => $m11111->id,
          'order' => 2,
      ]);
      $m111114 = factory(Menu::class)->create([
          'name' => 'Antecedentes',
          'slug' => '11111antecedentes',
          'parent' => $m11111->id,
          'order' => 3,
      ]);
      $m111121 = factory(Menu::class)->create([
          'name' => 'Administrativa',
          'slug' => '11112administrativa',
          'parent' => $m11112->id,
          'order' => 0,
      ]);
      $m111122 = factory(Menu::class)->create([
          'name' => 'Técnica',
          'slug' => '11112tecnica',
          'parent' => $m11112->id,
          'order' => 1,
      ]);
      $m111123 = factory(Menu::class)->create([
          'name' => 'Económica',
          'slug' => '11112economica',
          'parent' => $m11112->id,
          'order' => 2,
      ]);
      $m111124 = factory(Menu::class)->create([
          'name' => 'Antecedentes',
          'slug' => '11112antecedentes',
          'parent' => $m11112->id,
          'order' => 3,
      ]);
      $m111211 = factory(Menu::class)->create([
          'name' => 'Administrativa',
          'slug' => '11121administrativa',
          'parent' => $m11121->id,
          'order' => 0,
      ]);
      $m111212 = factory(Menu::class)->create([
          'name' => 'Técnica',
          'slug' => '11121tecnica',
          'parent' => $m11121->id,
          'order' => 1,
      ]);
      $m111213 = factory(Menu::class)->create([
          'name' => 'Económica',
          'slug' => '11121economica',
          'parent' => $m11121->id,
          'order' => 2,
      ]);
      $m111214 = factory(Menu::class)->create([
          'name' => 'Antecedentes',
          'slug' => '11121antecedentes',
          'parent' => $m11121->id,
          'order' => 3,
      ]);
      $m111221 = factory(Menu::class)->create([
          'name' => 'Administrativa',
          'slug' => '11122administrativa',
          'parent' => $m11122->id,
          'order' => 0,
      ]);
      $m111222 = factory(Menu::class)->create([
          'name' => 'Técnica',
          'slug' => '11122tecnica',
          'parent' => $m11122->id,
          'order' => 1,
      ]);
      $m111223 = factory(Menu::class)->create([
          'name' => 'Económica',
          'slug' => '11122economica',
          'parent' => $m11122->id,
          'order' => 2,
      ]);
      $m111224 = factory(Menu::class)->create([
          'name' => 'Antecedentes',
          'slug' => '11122antecedentes',
          'parent' => $m11122->id,
          'order' => 3,
      ]);
      $m112111 = factory(Menu::class)->create([
          'name' => 'Administrativa',
          'slug' => '11211administrativa',
          'parent' => $m11211->id,
          'order' => 0,
      ]);
      $m112112 = factory(Menu::class)->create([
          'name' => 'Técnica',
          'slug' => '11211tecnica',
          'parent' => $m11211->id,
          'order' => 1,
      ]);
      $m112113 = factory(Menu::class)->create([
          'name' => 'Económica',
          'slug' => '11211economica',
          'parent' => $m11211->id,
          'order' => 2,
      ]);
      $m112114 = factory(Menu::class)->create([
          'name' => 'Antecedentes',
          'slug' => '11211antecedentes',
          'parent' => $m11211->id,
          'order' => 3,
      ]);
      $m112121 = factory(Menu::class)->create([
          'name' => 'Administrativa',
          'slug' => '11212administrativa',
          'parent' => $m11212->id,
          'order' => 0,
      ]);
      $m112122 = factory(Menu::class)->create([
          'name' => 'Técnica',
          'slug' => '11212tecnica',
          'parent' => $m11212->id,
          'order' => 1,
      ]);
      $m112123 = factory(Menu::class)->create([
          'name' => 'Económica',
          'slug' => '11212economica',
          'parent' => $m11212->id,
          'order' => 2,
      ]);
      $m112124 = factory(Menu::class)->create([
          'name' => 'Antecedentes',
          'slug' => '11212antecedentes',
          'parent' => $m11212->id,
          'order' => 3,
      ]);
      $m112211 = factory(Menu::class)->create([
          'name' => 'Administrativa',
          'slug' => '11221administrativa',
          'parent' => $m11221->id,
          'order' => 0,
      ]);
      $m112212 = factory(Menu::class)->create([
          'name' => 'Técnica',
          'slug' => '11221tecnica',
          'parent' => $m11221->id,
          'order' => 1,
      ]);
      $m112213 = factory(Menu::class)->create([
          'name' => 'Económica',
          'slug' => '11221economica',
          'parent' => $m11221->id,
          'order' => 2,
      ]);
      $m112214 = factory(Menu::class)->create([
          'name' => 'Antecedentes',
          'slug' => '11221antecedentes',
          'parent' => $m11221->id,
          'order' => 3,
      ]);
      $m112221 = factory(Menu::class)->create([
          'name' => 'Administrativa',
          'slug' => '11222administrativa',
          'parent' => $m11222->id,
          'order' => 0,
      ]);
      $m112222 = factory(Menu::class)->create([
          'name' => 'Técnica',
          'slug' => '11222tecnica',
          'parent' => $m11222->id,
          'order' => 1,
      ]);
      $m112223 = factory(Menu::class)->create([
          'name' => 'Económica',
          'slug' => '11222economica',
          'parent' => $m11222->id,
          'order' => 2,
      ]);
      $m112224 = factory(Menu::class)->create([
          'name' => 'Antecedentes',
          'slug' => '11222antecedentes',
          'parent' => $m11222->id,
          'order' => 3,
      ]);
      $m121111 = factory(Menu::class)->create([
          'name' => 'Administrativa',
          'slug' => '12111administrativa',
          'parent' => $m12111->id,
          'order' => 0,
      ]);
      $m121112 = factory(Menu::class)->create([
          'name' => 'Técnica',
          'slug' => '12111tecnica',
          'parent' => $m12111->id,
          'order' => 1,
      ]);
      $m121113 = factory(Menu::class)->create([
          'name' => 'Económica',
          'slug' => '12111economica',
          'parent' => $m12111->id,
          'order' => 2,
      ]);
      $m121121 = factory(Menu::class)->create([
          'name' => 'Administrativa',
          'slug' => '12112administrativa',
          'parent' => $m12112->id,
          'order' => 0,
      ]);
      $m121122 = factory(Menu::class)->create([
          'name' => 'Técnica',
          'slug' => '12112tecnica',
          'parent' => $m12112->id,
          'order' => 1,
      ]);
      $m121123 = factory(Menu::class)->create([
          'name' => 'Económica',
          'slug' => '12112economica',
          'parent' => $m12112->id,
          'order' => 2,
      ]);
      $m121211 = factory(Menu::class)->create([
          'name' => 'Administrativa',
          'slug' => '12121administrativa',
          'parent' => $m12121->id,
          'order' => 0,
      ]);
      $m121212 = factory(Menu::class)->create([
          'name' => 'Técnica',
          'slug' => '12121tecnica',
          'parent' => $m12121->id,
          'order' => 1,
      ]);
      $m121213 = factory(Menu::class)->create([
          'name' => 'Económica',
          'slug' => '12121economica',
          'parent' => $m12121->id,
          'order' => 2,
      ]);
      $m121221 = factory(Menu::class)->create([
          'name' => 'Administrativa',
          'slug' => '12122administrativa',
          'parent' => $m12122->id,
          'order' => 0,
      ]);
      $m121222 = factory(Menu::class)->create([
          'name' => 'Técnica',
          'slug' => '12122tecnica',
          'parent' => $m12122->id,
          'order' => 1,
      ]);
      $m121223 = factory(Menu::class)->create([
          'name' => 'Económica',
          'slug' => '12122economica',
          'parent' => $m12122->id,
          'order' => 2,
      ]);

      $m122111 = factory(Menu::class)->create([
          'name' => 'Administrativa',
          'slug' => '12211administrativa',
          'parent' => $m12211->id,
          'order' => 0,
      ]);
      $m122112 = factory(Menu::class)->create([
          'name' => 'Técnica',
          'slug' => '12211tecnica',
          'parent' => $m12211->id,
          'order' => 1,
      ]);
      $m122113 = factory(Menu::class)->create([
          'name' => 'Económica',
          'slug' => '12211economica',
          'parent' => $m12211->id,
          'order' => 2,
      ]);
      $m122121 = factory(Menu::class)->create([
          'name' => 'Administrativa',
          'slug' => '12212administrativa',
          'parent' => $m12212->id,
          'order' => 0,
      ]);
      $m122122 = factory(Menu::class)->create([
          'name' => 'Técnica',
          'slug' => '12212tecnica',
          'parent' => $m12212->id,
          'order' => 1,
      ]);
      $m122123 = factory(Menu::class)->create([
          'name' => 'Económica',
          'slug' => '12212economica',
          'parent' => $m12212->id,
          'order' => 2,
      ]);
      $m122211 = factory(Menu::class)->create([
          'name' => 'Administrativa',
          'slug' => '12221administrativa',
          'parent' => $m12221->id,
          'order' => 0,
      ]);
      $m122212 = factory(Menu::class)->create([
          'name' => 'Técnica',
          'slug' => '12221tecnica',
          'parent' => $m12221->id,
          'order' => 1,
      ]);
      $m122213 = factory(Menu::class)->create([
          'name' => 'Económica',
          'slug' => '12221economica',
          'parent' => $m12221->id,
          'order' => 2,
      ]);
      $m122221 = factory(Menu::class)->create([
          'name' => 'Administrativa',
          'slug' => '12222administrativa',
          'parent' => $m12222->id,
          'order' => 0,
      ]);
      $m122222 = factory(Menu::class)->create([
          'name' => 'Técnica',
          'slug' => '12222tecnica',
          'parent' => $m12222->id,
          'order' => 1,
      ]);
      $m122223 = factory(Menu::class)->create([
          'name' => 'Económica',
          'slug' => '12222economica',
          'parent' => $m12222->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Ingresados',
          'slug' => '111111ingresados',
          'parent' => $m111111->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '111111otros',
          'parent' => $m111111->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Ingresados',
          'slug' => '111112ingresados',
          'parent' => $m111112->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '111112otros',
          'parent' => $m111112->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Oferta',
          'slug' => '111113oferta',
          'parent' => $m111113->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Dimensión Económica',
          'slug' => '111113dimension_economica',
          'parent' => $m111113->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Cotizaciones',
          'slug' => '111113cotizaciones',
          'parent' => $m111113->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '111113otros',
          'parent' => $m111113->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Ingresados',
          'slug' => '111121ingresados',
          'parent' => $m111121->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '111121otros',
          'parent' => $m111121->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Ingresados',
          'slug' => '111122ingresados',
          'parent' => $m111122->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '111122otros',
          'parent' => $m111122->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Oferta',
          'slug' => '111123oferta',
          'parent' => $m111123->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Dimensión Económica',
          'slug' => '111123dimension_economica',
          'parent' => $m111123->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Cotizaciones',
          'slug' => '111123cotizaciones',
          'parent' => $m111123->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '111123otros',
          'parent' => $m111123->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Ingresados',
          'slug' => '111211ingresados',
          'parent' => $m111211->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '111211otros',
          'parent' => $m111211->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Ingresados',
          'slug' => '111212ingresados',
          'parent' => $m111212->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '111212otros',
          'parent' => $m111212->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Oferta',
          'slug' => '111213oferta',
          'parent' => $m111213->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Dimensión Económica',
          'slug' => '111213dimension_economica',
          'parent' => $m111213->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Cotizaciones',
          'slug' => '111213cotizaciones',
          'parent' => $m111213->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '111213otros',
          'parent' => $m111213->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Ingresados',
          'slug' => '111221ingresados',
          'parent' => $m111221->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '111221otros',
          'parent' => $m111221->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Ingresados',
          'slug' => '111222ingresados',
          'parent' => $m111222->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '111222otros',
          'parent' => $m111222->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Oferta',
          'slug' => '111223oferta',
          'parent' => $m111223->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Dimensión Económica',
          'slug' => '111223dimension_economica',
          'parent' => $m111223->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Cotizaciones',
          'slug' => '111223cotizaciones',
          'parent' => $m111223->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '111223otros',
          'parent' => $m111223->id,
          'order' => 3,
      ]);

      factory(Menu::class)->create([
          'name' => 'Ingresados',
          'slug' => '112111ingresados',
          'parent' => $m112111->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '112111otros',
          'parent' => $m112111->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Ingresados',
          'slug' => '112112ingresados',
          'parent' => $m112112->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '112112otros',
          'parent' => $m112112->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Oferta',
          'slug' => '112113oferta',
          'parent' => $m112113->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Dimensión Económica',
          'slug' => '112113dimension_economica',
          'parent' => $m112113->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Cotizaciones',
          'slug' => '112113cotizaciones',
          'parent' => $m112113->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '112113otros',
          'parent' => $m112113->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Ingresados',
          'slug' => '112121ingresados',
          'parent' => $m112121->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '112121otros',
          'parent' => $m112121->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Ingresados',
          'slug' => '112122ingresados',
          'parent' => $m112122->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '112122otros',
          'parent' => $m112122->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Oferta',
          'slug' => '112123oferta',
          'parent' => $m112123->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Dimensión Económica',
          'slug' => '112123dimension_economica',
          'parent' => $m112123->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Cotizaciones',
          'slug' => '112123cotizaciones',
          'parent' => $m112123->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '112123otros',
          'parent' => $m112123->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Ingresados',
          'slug' => '112211ingresados',
          'parent' => $m112211->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '112211otros',
          'parent' => $m112211->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Ingresados',
          'slug' => '112212ingresados',
          'parent' => $m112212->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '112212otros',
          'parent' => $m112212->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Oferta',
          'slug' => '112213oferta',
          'parent' => $m112213->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Dimensión Económica',
          'slug' => '112213dimension_economica',
          'parent' => $m112213->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Cotizaciones',
          'slug' => '112213cotizaciones',
          'parent' => $m112213->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '112213otros',
          'parent' => $m112213->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Ingresados',
          'slug' => '112221ingresados',
          'parent' => $m112221->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '112221otros',
          'parent' => $m112221->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Ingresados',
          'slug' => '112222ingresados',
          'parent' => $m112222->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '112222otros',
          'parent' => $m112222->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Oferta',
          'slug' => '112223oferta',
          'parent' => $m112223->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Dimensión Económica',
          'slug' => '112223dimension_economica',
          'parent' => $m112223->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Cotizaciones',
          'slug' => '112223cotizaciones',
          'parent' => $m112223->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '112223otros',
          'parent' => $m112223->id,
          'order' => 3,
      ]);


      factory(Menu::class)->create([
          'name' => 'Lista Asistencia',
          'slug' => '121111lista_asistencia',
          'parent' => $m121111->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Encuestas Satisfacción',
          'slug' => '121111encuestas_satisfaccion',
          'parent' => $m121111->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Pruebas Pautas',
          'slug' => '121111pruebas_pautas1',
          'parent' => $m121111->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Programas',
          'slug' => '121111programas1',
          'parent' => $m121111->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Para Impresión',
          'slug' => '121111para_impresion1',
          'parent' => $m121111->id,
          'order' => 4,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '121111otros1',
          'parent' => $m121111->id,
          'order' => 5,
      ]);
      factory(Menu::class)->create([
          'name' => 'Presentación',
          'slug' => '121112presentacion',
          'parent' => $m121112->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Informes Curso',
          'slug' => '121112informes_curso',
          'parent' => $m121112->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Trabajo Grupal',
          'slug' => '121112trabajo_grupal',
          'parent' => $m121112->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Bibliografía',
          'slug' => '121112bibliografia',
          'parent' => $m121112->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Orden de Compra',
          'slug' => '121113orden_compra',
          'parent' => $m121113->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Factura',
          'slug' => '121113factura',
          'parent' => $m121113->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Cotizaciones',
          'slug' => '121113cotizaciones',
          'parent' => $m121113->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '121113otros',
          'parent' => $m121113->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Lista Asistencia',
          'slug' => '121121lista_asistencia',
          'parent' => $m121121->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Encuestas Satisfacción',
          'slug' => '121121encuestas_satisfaccion',
          'parent' => $m121121->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Pruebas Pautas',
          'slug' => '121121pruebas_pautas',
          'parent' => $m121121->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Programas',
          'slug' => '121121programas',
          'parent' => $m121121->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Para Impresión',
          'slug' => '121121para_impresion',
          'parent' => $m121121->id,
          'order' => 4,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '121121otros',
          'parent' => $m121121->id,
          'order' => 5,
      ]);
      factory(Menu::class)->create([
          'name' => 'Presentación',
          'slug' => '121122presentacion',
          'parent' => $m121122->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Informes Curso',
          'slug' => '121122informes_curso',
          'parent' => $m121122->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Trabajo Grupal',
          'slug' => '121122trabajo_grupal',
          'parent' => $m121122->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Bibliografía',
          'slug' => '121122bibliografia',
          'parent' => $m121122->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Orden de Compra',
          'slug' => '121123orden_compra',
          'parent' => $m121123->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Factura',
          'slug' => '121123factura',
          'parent' => $m121123->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Cotizaciones',
          'slug' => '121123cotizaciones',
          'parent' => $m121123->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '121123otros',
          'parent' => $m121123->id,
          'order' => 3,
      ]);




      factory(Menu::class)->create([
          'name' => 'Lista Asistencia',
          'slug' => '121211lista_asistencia',
          'parent' => $m121211->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Encuestas Satisfacción',
          'slug' => '121211encuestas_satisfaccion',
          'parent' => $m121211->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Pruebas Pautas',
          'slug' => '121211pruebas_pautas',
          'parent' => $m121211->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Programas',
          'slug' => '121211programas',
          'parent' => $m121211->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Para Impresión',
          'slug' => '121211para_impresion',
          'parent' => $m121211->id,
          'order' => 4,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '121211otros',
          'parent' => $m121211->id,
          'order' => 5,
      ]);
      factory(Menu::class)->create([
          'name' => 'Presentación',
          'slug' => '121212presentacion',
          'parent' => $m121212->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Informes Curso',
          'slug' => '121212informes_curso',
          'parent' => $m121212->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Trabajo Grupal',
          'slug' => '121212trabajo_grupal',
          'parent' => $m121212->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Bibliografía',
          'slug' => '121212bibliografia',
          'parent' => $m121212->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Orden de Compra',
          'slug' => '121213orden_compra',
          'parent' => $m121213->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Factura',
          'slug' => '121213factura',
          'parent' => $m121213->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Cotizaciones',
          'slug' => '121213cotizaciones',
          'parent' => $m121213->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '121213otros',
          'parent' => $m121213->id,
          'order' => 3,
      ]);

      factory(Menu::class)->create([
          'name' => 'Lista Asistencia',
          'slug' => '121221lista_asistencia',
          'parent' => $m121221->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Encuestas Satisfacción',
          'slug' => '121221encuestas_satisfaccion',
          'parent' => $m121221->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Pruebas Pautas',
          'slug' => '121221pruebas_pautas',
          'parent' => $m121221->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Programas',
          'slug' => '121221programas',
          'parent' => $m121221->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Para Impresión',
          'slug' => '121221para_impresion',
          'parent' => $m121221->id,
          'order' => 4,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '121221otros',
          'parent' => $m121221->id,
          'order' => 5,
      ]);
      factory(Menu::class)->create([
          'name' => 'Presentación',
          'slug' => '121222presentacion',
          'parent' => $m121222->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Informes Curso',
          'slug' => '121222informes_curso',
          'parent' => $m121222->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Trabajo Grupal',
          'slug' => '121222trabajo_grupal',
          'parent' => $m121222->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Bibliografía',
          'slug' => '121222bibliografia',
          'parent' => $m121222->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Orden de Compra',
          'slug' => '121223orden_compra',
          'parent' => $m121223->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Factura',
          'slug' => '121223factura',
          'parent' => $m121223->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Cotizaciones',
          'slug' => '121223cotizaciones',
          'parent' => $m121223->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '121223otros',
          'parent' => $m121223->id,
          'order' => 3,
      ]);



      factory(Menu::class)->create([
          'name' => 'Lista Asistencia',
          'slug' => '122111lista_asistencia',
          'parent' => $m122111->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Encuestas Satisfacción',
          'slug' => '122111encuestas_satisfaccion',
          'parent' => $m122111->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Pruebas Pautas',
          'slug' => '122111pruebas_pautas',
          'parent' => $m122111->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Programas',
          'slug' => '122111programas',
          'parent' => $m122111->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Para Impresión',
          'slug' => '122111para_impresion',
          'parent' => $m122111->id,
          'order' => 4,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '122111otros',
          'parent' => $m122111->id,
          'order' => 5,
      ]);
      factory(Menu::class)->create([
          'name' => 'Presentación',
          'slug' => '122112presentacion',
          'parent' => $m122112->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Informes Curso',
          'slug' => '122112informes_curso',
          'parent' => $m122112->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Trabajo Grupal',
          'slug' => '122112trabajo_grupal',
          'parent' => $m122112->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Bibliografía',
          'slug' => '122112bibliografia',
          'parent' => $m122112->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Orden de Compra',
          'slug' => '122113orden_compra',
          'parent' => $m122113->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Factura',
          'slug' => '122113factura',
          'parent' => $m122113->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Cotizaciones',
          'slug' => '122113cotizaciones',
          'parent' => $m122113->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '122113otros',
          'parent' => $m122113->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Lista Asistencia',
          'slug' => '122121lista_asistencia',
          'parent' => $m122121->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Encuestas Satisfacción',
          'slug' => '122121encuestas_satisfaccion',
          'parent' => $m122121->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Pruebas Pautas',
          'slug' => '122121pruebas_pautas',
          'parent' => $m122121->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Programas',
          'slug' => '122121programas',
          'parent' => $m122121->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Para Impresión',
          'slug' => '122121para_impresion',
          'parent' => $m122121->id,
          'order' => 4,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '122121otros',
          'parent' => $m122121->id,
          'order' => 5,
      ]);
      factory(Menu::class)->create([
          'name' => 'Presentación',
          'slug' => '122122presentacion',
          'parent' => $m122122->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Informes Curso',
          'slug' => '122122informes_curso',
          'parent' => $m122122->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Trabajo Grupal',
          'slug' => '122122trabajo_grupal',
          'parent' => $m122122->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Bibliografía',
          'slug' => '122122bibliografia',
          'parent' => $m122122->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Orden de Compra',
          'slug' => '122123orden_compra',
          'parent' => $m122123->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Factura',
          'slug' => '122123factura',
          'parent' => $m122123->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Cotizaciones',
          'slug' => '122123cotizaciones',
          'parent' => $m122123->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '122123otros',
          'parent' => $m122123->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Lista Asistencia',
          'slug' => '122211lista_asistencia',
          'parent' => $m122211->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Encuestas Satisfacción',
          'slug' => '122211encuestas_satisfaccion',
          'parent' => $m122211->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Pruebas Pautas',
          'slug' => '122211pruebas_pautas',
          'parent' => $m122211->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Programas',
          'slug' => '122211programas',
          'parent' => $m122211->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Para Impresión',
          'slug' => '122211para_impresion',
          'parent' => $m122211->id,
          'order' => 4,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '122211otros',
          'parent' => $m122211->id,
          'order' => 5,
      ]);
      factory(Menu::class)->create([
          'name' => 'Presentación',
          'slug' => '122212presentacion',
          'parent' => $m122212->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Informes Curso',
          'slug' => '122212informes_curso',
          'parent' => $m122212->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Trabajo Grupal',
          'slug' => '122212trabajo_grupal',
          'parent' => $m122212->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Bibliografía',
          'slug' => '122212bibliografia',
          'parent' => $m122212->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Orden de Compra',
          'slug' => '122213orden_compra',
          'parent' => $m122213->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Factura',
          'slug' => '122213factura',
          'parent' => $m122213->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Cotizaciones',
          'slug' => '122213cotizaciones',
          'parent' => $m122213->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '122213otros',
          'parent' => $m122213->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Lista Asistencia',
          'slug' => '122221lista_asistencia',
          'parent' => $m122221->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Encuestas Satisfacción',
          'slug' => '122221encuestas_satisfaccion',
          'parent' => $m122221->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Pruebas Pautas',
          'slug' => '122221pruebas_pautas',
          'parent' => $m122221->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Programas',
          'slug' => '122221programas',
          'parent' => $m122221->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Para Impresión',
          'slug' => '122221para_impresion',
          'parent' => $m122221->id,
          'order' => 4,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '122221otros',
          'parent' => $m122221->id,
          'order' => 5,
      ]);
      factory(Menu::class)->create([
          'name' => 'Presentación',
          'slug' => '122222presentacion',
          'parent' => $m122222->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Informes Curso',
          'slug' => '122222informes_curso',
          'parent' => $m122222->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Trabajo Grupal',
          'slug' => '122222trabajo_grupal',
          'parent' => $m122222->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Bibliografía',
          'slug' => '122222bibliografia',
          'parent' => $m122222->id,
          'order' => 3,
      ]);
      factory(Menu::class)->create([
          'name' => 'Orden de Compra',
          'slug' => '122223orden_compra',
          'parent' => $m122223->id,
          'order' => 0,
      ]);
      factory(Menu::class)->create([
          'name' => 'Factura',
          'slug' => '122223factura',
          'parent' => $m122223->id,
          'order' => 1,
      ]);
      factory(Menu::class)->create([
          'name' => 'Cotizaciones',
          'slug' => '122223cotizaciones',
          'parent' => $m122223->id,
          'order' => 2,
      ]);
      factory(Menu::class)->create([
          'name' => 'Otros',
          'slug' => '122223otros',
          'parent' => $m122223->id,
          'order' => 3,
      ]);
    }
}
