<?php
namespace Gabs\Controllers;
use Gabs\Models\Personas;
 
class rrhhController extends ControllerBase
{

    public function indexAction() {   

        $this->vacacionesConsultaAction();

    }



    public function vacacionesGestionAction() {
        $menu = 'menu/topMenu';
        $content = 'rrhh/vacaciones-gestion';
         $sideBar = 'menu/sideBar';

        //Asi deberia venir mas o menos
        $solicitudesList = $this->getSolicitudes();
        $usuariosList = $this->getUsers();

        $pcdata = Array('solicitudes'=>$solicitudesList, 'usuarios'=>$usuariosList);


        echo $this->view->render('theme',array('topMenu'=>$menu,'menuSel'=>'perfil', 'sideBar'=>$sideBar, 'sideBarSel'=>'gestion', 'pcView'=>$content,'pcData'=>$pcdata, 'jsScript' => ''));
    }



    public function vacacionesPersonalAction() {
        $menu = 'menu/topMenu';
        $content = 'rrhh/vacaciones-situacion-personal';
        $sideBar = 'menu/sideBar';

        //Asi deberia venir mas o menos
        $misSolicitudesList = $this->getSolicitudesByRut();
        $miEstadoVacacionesList = $this->getEstadoVacaciones();

        $pcData = array('solicitudes' => $misSolicitudesList, "estado" => $miEstadoVacacionesList);

        echo $this->view->render('theme',array('topMenu'=>$menu,'sideBar'=>$sideBar,'menuSel'=>'perfil', 'sideBarSel'=>'estado','pcView'=>$content,'pcData'=>$pcData, 'jsScript' => ''));
    }



    public function vacacionesConsultaAction() {   
        $menu = 'menu/topMenu';
        $content = 'rrhh/vacaciones-consulta-situacion';


        echo $this->view->render('theme', array('topMenu'=>$menu, 'menuSel'=>'evaluar','pcView'=>$content, 'pcData'=>'', 'jsScript'=>''));   
    }  



    public function vacacionesAprobacionAction() {
        $menu = 'menu/topMenu';
        $content = 'rrhh/vacaciones-aprobacion';
        $sideBar = 'menu/sideBar';

        $solicitudesJefeList = $this->getSolicitudesByJefe();
        $pcdata = Array('solicitudes' => $solicitudesJefeList );

        
        echo $this->view->render('theme',array('topMenu'=>$menu,'menuSel'=>'configurar','sideBar'=>$sideBar, 'sideBarSel'=>'solicitudes','pcView'=>$content,'pcData'=>$pcdata, 'jsScript' => ''));
    }


    private function getSolicitudesByRut(){
        $datos = Array(
            Array('fecha'=>'29/02/2016', 'solicitante'=>'Jorge Cociña Pacheco', 'finical'=>'21/03/2016', 'ffin'=>'31/03/2016','ndias'=>' 10', 'jefedir'=>'Miguel Jara', 'estado'=>'pendiente'),
            Array('fecha'=>'01/02/2016', 'solicitante'=>'Jorge Cociña Pacheco', 'finical'=>'02/02/2016', 'ffin'=>'07/02/2016','ndias'=>' 5', 'jefedir'=>'Miguel Jara', 'estado'=>'aprobado'),
            Array('fecha'=>'19/02/2015', 'solicitante'=>'Jorge Cociña Pacheco', 'finical'=>'22/02/2015', 'ffin'=>'09/03/2015','ndias'=>' 15', 'jefedir'=>'Miguel Jara', 'estado'=>'aprobado'),
            Array('fecha'=>'29/03/2014', 'solicitante'=>'Jorge Cociña Pacheco', 'finical'=>'01/04/2014', 'ffin'=>'02/04/2014','ndias'=>' 2', 'jefedir'=>'Miguel Jara', 'estado'=>'aprobado'),
            Array('fecha'=>'29/02/2014', 'solicitante'=>'Jorge Cociña Pacheco', 'finical'=>'01/03/2014', 'ffin'=>'03/03/2014','ndias'=>' 3', 'jefedir'=>'Miguel Jara', 'estado'=>'aprobado')
            );
        return $datos;
    }

    private function getSolicitudesByJefe() {
        $datos = Array(
            Array('rut'=>'17617837k','fecha'=>'29/02/2016', 'solicitante'=>'Jorge Cociña Pacheco', 'finical'=>'29/02/2016', 'ffin'=>'29/02/2016','ndias'=>' 3','jefedir'=>'Miguel Jara', 'estado'=>'pendiente'),
            Array('rut'=>'17617837k','fecha'=>'29/02/2016', 'solicitante'=>'Jorge Cociña Pacheco', 'finical'=>'29/02/2016', 'ffin'=>'29/02/2016','ndias'=>' 4','jefedir'=>'Miguel Jara', 'estado'=>'pendiente'),
            Array('rut'=>'17617837k','fecha'=>'29/02/2016', 'solicitante'=>'Jorge Cociña Pacheco', 'finical'=>'29/02/2016', 'ffin'=>'29/02/2016','ndias'=>' 5','jefedir'=>'Miguel Jara', 'estado'=>'pendiente'),
            Array('rut'=>'17617837k','fecha'=>'29/02/2016', 'solicitante'=>'Jorge Cociña Pacheco', 'finical'=>'29/02/2016', 'ffin'=>'29/02/2016','ndias'=>' 6','jefedir'=>'Miguel Jara', 'estado'=>'pendiente'),

            );
        return $datos;

    }

    private function getSolicitudes() {
        $datos = Array(
            Array('rut'=>'138863700','fecha'=>'29/02/2016', 'solicitante'=>'Francisco Acuña Villalobos', 'finical'=>'29/02/2016', 'ffin'=>'29/02/2016','ndias'=>' 3', 'jefedir'=>'Hugo Varela', 'estado'=>'pendiente'),
            Array('rut'=>'164285251','fecha'=>'29/02/2016', 'solicitante'=>'Andrés Almarza Salas ', 'finical'=>'29/02/2016', 'ffin'=>'29/02/2016','ndias'=>' 3','jefedir'=>'Miguel Jara', 'estado'=>'pendiente'),
            Array('rut'=>'180834710','fecha'=>'29/02/2016', 'solicitante'=>'Cristobal Ampuero Rodriguez ', 'finical'=>'29/02/2016', 'ffin'=>'29/02/2016','ndias'=>' 3','jefedir'=>'Rodrigo Manriquez', 'estado'=>'pendiente'),
            Array('rut'=>'17325332k','fecha'=>'29/02/2016', 'solicitante'=>'Adriana Arriagada Campora ', 'finical'=>'29/02/2016', 'ffin'=>'29/02/2016','ndias'=>' 3','jefedir'=>'Adolfo Gomez', 'estado'=>'aprobado'),
            Array('rut'=>'125133266','fecha'=>'29/02/2016', 'solicitante'=>'Luis Miguel Aucañir Huaiquinao', 'finical'=>'29/02/2016', 'ffin'=>'29/02/2016','ndias'=>' 3','jefedir'=>'Hugo Varela', 'estado'=>'pendiente'),
            Array('rut'=>'89214726','fecha'=>'29/02/2016', 'solicitante'=>'Ivan Bey Vives', 'finical'=>'29/02/2016', 'ffin'=>'29/02/2016','ndias'=>' 3','jefedir'=>'Edson Moya', 'estado'=>'aprobado'),
            Array('rut'=>'252532285','fecha'=>'29/02/2016', 'solicitante'=>'Alessandra Mara Chaves Moreira', 'finical'=>'29/02/2016', 'ffin'=>'29/02/2016','ndias'=>' 3','jefedir'=>'Felipe Tapia', 'estado'=>'pendiente'),
            Array('rut'=>'17617837k','fecha'=>'29/02/2016', 'solicitante'=>'Jorge Cociña Pacheco', 'finical'=>'29/02/2016', 'ffin'=>'29/02/2016','ndias'=>' 3','jefedir'=>'Miguel Jara', 'estado'=>'aprobado'),
            Array('rut'=>'181168307','fecha'=>'29/02/2016', 'solicitante'=>'Gonzalo Diaz Román', 'finical'=>'29/02/2016', 'ffin'=>'29/02/2016','ndias'=>' 3','jefedir'=>'Adolfo Gomez', 'estado'=>'aprobado')
            );
        return $datos;
    }

    private function getEstadoVacaciones() {
        $datos = Array(
            Array('periodo'=>'1','anio'=>'2013','finicial'=>"21/12/2013",'ffin'=>'21/12/2014','vacaciones'=>'15','utilizado'=>'5','saldo'=>'10','pdteperiodo'=>'10'),
            Array('periodo'=>'2','anio'=>'2014','finicial'=>"21/12/2014",'ffin'=>'21/12/2015','vacaciones'=>'25','utilizado'=>'15','saldo'=>'10','pdteperiodo'=>'0'),
            Array('periodo'=>'3','anio'=>'2015','finicial'=>"21/12/2015",'ffin'=>'21/12/2016','vacaciones'=>'25','utilizado'=>'10','saldo'=>'15','pdteperiodo'=>'0'),
            Array('periodo'=>'4','anio'=>'2016','finicial'=>"21/12/2016",'ffin'=>'21/12/2017','vacaciones'=>'15','utilizado'=>'-','saldo'=>'-','pdteperiodo'=>'-')
            );
        return $datos;
    }

    private function getUsers() {
        $datos = Array(Array('138863700','Francisco'),
                        Array('164285251','Andrés'),
                        Array('180834710','Cristobal'),
                        Array('17325332k','Adriana'), 
                        Array('125133266','Luis Miguel'),
                        Array('89214726','Ivan'));
        return $datos;
    }

}