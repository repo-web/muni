<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model("modelo");
    }

    public function index() {

        $this->load->view('index');
    }

    function Terminar() {
        $codigo = $this->input->post('codigo');
        $this->modelo->Terminar($codigo);
    }

    function eliminar() {
        $id_solicitud = $this->input->post('id_solicitud');
        $this->modelo->eliminar($id_solicitud);
    }

    function leer() {

        $codigo = $this->input->post('codigo');
        $data = $this->modelo->leer($codigo)->result();
        $fecha = "";
        $comentario = "";
        foreach ($data as $fila) {
            $fecha = $fila->fecha_estimada;
            $comentario = $fila->comentario_tecnico;
        }
        echo json_encode(array("comentario" => $comentario, "fecha" => $fecha));
    }

    function ingresarnoticia() {

        $titulo = $this->input->post('titulo');
        $encabezado = $this->input->post('encabezado');
        $texo = $this->input->post('texto');
        $bibliografia = $this->input->post('bibliografia ');
        $autor = $this->input->post('autor');
        $ivideo = $this->input->post('ivideo');
//        $archivos = $this->input->post('archivos');
        if ($_FILES["file"]["name"][0]) {
            echo "ok";
        }

        $valorfoto = 0;
        for ($x = 0; $x < count($_FILES["file"]["name"]); $x++) {
            $origen = $_FILES["file"]["tmp_name"][$x];
            $destino = "../fotografias/" . $_FILES["file"]["name"][$x];
            if (@move_uploaded_file($origen, $destino)) {
                $valorfoto = 1;
            } else {
                $valorfoto = 2;
            }
        }



        if ($this->modelo->ingresarnoticia($titulo, $encabezado, $texo, $bibliografia, $autor, $ivideo) == 1) {
            $valor = 1;
        } else {
            $valor = 2;
        }


        echo json_encode(array("valor" => $valor));
    }

    function conectar() {

        $correo = $this->input->post('correo');
        $clave = $this->input->post('clave');
        $valor = 0;
        $permiso = 0;
        $nombre2 = "";
        $cookie = array('correo' => '', 'permiso' => '', 'esta_logeado' => false);
        if ($this->modelo->conectar($correo, $clave) == 1) {
            $permiso = $this->modelo->permiso($correo)->result();
            $nombre2 = "";
            $id_conectado = 0;
            foreach ($permiso as $fila) {
                $permiso = $fila->perfil;
                $nombre2 = $fila->nombre;
                $id_conectado = $fila->id_usuario;
            }
            $valor = 1;
            $cookie = array('id_conectado' => $id_conectado, 'nombre' => $nombre2, 'correo' => $correo, 'permiso' => $permiso, 'esta_logeado' => true);
        }
        $this->session->set_userdata($cookie);
        echo json_encode(array("valor" => $valor, "correo" => $correo, "permiso" => $permiso, "nombre2" => $nombre2));
    }

    function cerrar() {
        $this->session->sess_destroy();
    }

    function verifaLogin() {
        $valor = 0;
        $correo = '';
        if ($this->session->userdata('esta_logeado') == true) {
            $valor = 1;
            $correo = $this->session->userdata('correo');
        }
        $permiso = $this->session->userdata('permiso');
        echo json_encode(array("valor" => $valor, "correo" => $correo, "permiso" => $permiso));
    }

    function cargarCategorias() {
        $datos['categorias'] = $this->modelo->cargaCategorias()->result();
        $this->load->view('categorias', $datos);
    }

    function cargarCategorias2() {
        $datos['categorias'] = $this->modelo->cargaCategorias()->result();
        $this->load->view('categorias2', $datos);
    }

    function ingresarcategoria() {
        $categorianueva = $this->input->post('categorianueva');

        $valor = 1;
        if ($this->modelo->ingresarcategoria($categorianueva) == 0) {
            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

    function modificarcategoria() {
        $categorianueva = $this->input->post('categorianueva');
        $actual = $this->input->post('actual');
        $valor = 1;
        if ($this->modelo->modificarcategoria($categorianueva, $actual) == 0) {
            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

    function evaluar() {

        $id = $this->input->post('id');
        $puntaje = $this->input->post('puntaje');
        $valor = 1;
        if ($this->modelo->evaluar($id, $puntaje) == 0) {

            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

    function guardarcambios() {

        $id = $this->input->post('id_solicitud');
        $fecha_estimada = $this->input->post('fecha');
        $comentario = $this->input->post('comentariotecnico');
        $valor = 1;
        if ($this->modelo->guardarcambios($id, $fecha_estimada, $comentario) == 0) {

            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

    function ingresosolicitud() {
        $comentario = $this->input->post('comentario');
        $categoria = $this->input->post('categoria');
//        $correo = $this->session->userdata('correo');
        $id_conectado = $this->session->userdata('id_conectado');


        $fechaactual = date('d-m-Y');
        $valor = 1;
        if ($this->modelo->ingresosolicitud($categoria, $comentario, $fechaactual, $id_conectado) == 0) {

            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

    function cargarsolicitudes() {
        $correo = $this->session->userdata('correo');
        $datos['solicitudes'] = $this->modelo->cargarsolicitudes($correo)->result();
        $this->load->view('ReporteSolicitudes', $datos);
    }

    function cargacpanel() {
        $this->load->view('cpanel');
    }

    function reportecliente() {
        $id_conectado = $this->session->userdata('id_conectado');
        $data = $this->modelo->reportecliente($id_conectado);
        $datos['cantidad'] = $data->num_rows();
        $datos['solicitudes'] = $data->result();
        $this->load->view('CARGASOLICITUDESCLIENTE', $datos);
    }

    function reportetecnico() {
        $correo = $this->session->userdata('correo');
        $data = $this->modelo->reportetecnico($correo);
        $datos['cantidad'] = $data->num_rows();
        $datos['solicitudes'] = $data->result();
        $this->load->view('reportesolicitudesTecnico', $datos);
    }

    function derivar() {

        $id_solicitud = $this->input->post('id_solicitud');
        $id_tecnico = $this->input->post('id_tecnico');
        $valor = 1;
        if ($this->modelo->derivar($id_solicitud, $id_tecnico) == 0) {
            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

//aun no se termina esta funcion
    function enviarcorreo() {
        $correosAdmin = $this->modelo->rescataadmin();
        $destinatarios = "";
        foreach ($correosAdmin as $fila) {
            $aux = $fila->correo;
            $destinatarios.="<" . $aux . ">" . ", ";
        }
        $nombre = $this->session->userdata('nombre');
        $correo = $this->session->userdata('correo');
        $mensaje.="Se a ingresado una nueva Solicitud por parte de " . $nombre . ". \r\n " . "Favor ingresar al sistema para derivar Solicitud a Tecnico  o ponerce en contacto con " . $nombre . " al correo  " . $correo . " ";
        // Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
        $mensaje = wordwrap($mensaje, 70, "\r\n");
        $cabeceras .= 'From: SISTEMA DE SOLICITUD <info@munilinares.cl>' . "\r\n";
        if (mail($destinatarios, "ALERTA NUEVA SOLICITUD", $mensaje, $cabeceras)) {
            $valor = 1;
            echo json_encode(array("valor" => $valor));
        } else {
            $valor = 0;
            echo json_encode(array("valor" => $valor));
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */