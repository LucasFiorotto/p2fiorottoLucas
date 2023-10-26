<?php
    class Alumno {
        private $dni;
        private $nombre;
        private $apellido;
        private $fechaNacimiento;
        private $database;

        public function __construct($dni, $nombre, $apellido, $fechaNacimiento, $database) {
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->fechaNacimiento = $fechaNacimiento;
            $this->database = $database;
        }

        public function setAlumno() { 
            $sql = "INSERT INTO alumnos (dni, nombre, apellido, fecha_nacimiento) VALUES ('$this->dni', '$this->nombre', '$this->apellido', '$this->fechaNacimiento')";
            $stmt = $this->database->conn->prepare($sql);
            
            try {
                $stmt->execute();
            } catch(PDOException $e) {
                if ($e->getCode() == 23000) { ?>
                    <script> alert("DNI ya existe");
                    window.location.replace("alta_alumno.php?dni=<?php echo $this->dni ?>&nombre=<?php echo $this->nombre ?>&apellido=<?php echo $this->apellido ?>&fecha_nacimiento=<?php echo $this->fechaNacimiento ?>");
                    </script>';
                <?php }
            }

            echo '<script> alert("Alumno dado de alta con éxito"); </script>';
        }

        public function deleteAlumno() {
            $sql = "DELETE FROM alumnos WHERE dni = '$this->dni'";
            $stmt = $this->database->conn->prepare($sql);
            $stmt->execute();

            echo '<script> alert("Alumno dado de baja con éxito");
            window.location.replace("index.php");
            </script>';
        }

        public function updateAlumno($dniAnterior) {
            $sql = "UPDATE alumnos SET dni = '$this->dni', nombre = '$this->nombre', apellido = '$this->apellido', fecha_nacimiento = '$this->fechaNacimiento' WHERE dni = $dniAnterior";
            $stmt = $this->database->conn->prepare($sql);
            $stmt->execute();

            echo '<script> alert("Alumno modificado con éxito");
                location.href = "index.php";
            </script>';
        }

        public function getAlumno() {
            $sql = "SELECT * FROM alumnos WHERE dni = '$this->dni'";
            $stmt = $this->database->conn->prepare($sql);
            $stmt->execute();
            $datos = $stmt->fetchAll();
            
            if (empty($datos) == false) {
                return $datos;
            } else { ?>
                <script>
                    alert("No existe alumno registrado con tal DNI, revise y vuelva a intentar");
                    window.location.replace("../index.php?dni=<?php echo $this->dni ?>");
                </script>
            <?php }
        }

        public function getListaAlumnos() {
            $sql = "SELECT * FROM alumnos ORDER BY apellido";
            $stmt = $this->database->conn->prepare($sql);
            $stmt->execute();
            $alumnos = $stmt->fetchAll();
            
            foreach ($alumnos as $alumno) { ?>
                <tr>
                    <td class="h5 text-center align-middle"><?php echo $alumno['apellido']; ?></td> 
                    <td class="h5 text-center align-middle"><?php echo $alumno['nombre']; ?></td>
                    <td class="h5 text-center align-middle"><?php echo $alumno['dni']; ?></td>
                    <td><?php
                        echo "<a href='modificar_alumno.php?dni=".$alumno['dni']."' class='btn'><img src='../bootstrap/icons/pen-fill.svg' role='img' width='32' height='32'></a>";
                        echo "<a href='confirmar_baja_alumno.php?dni=".$alumno['dni']."' class='btn'><img src='../bootstrap/icons/person-x-fill.svg' role='img' width='32' height='32'></a>";
                        ?></td>
                </tr>
            <?php
            }
        }

        public function getListaAlumnosAusentes() {
            date_default_timezone_set('America/Argentina/Buenos_Aires');
            $fecha = date("Y-m-d");

            $sql = "SELECT *
            FROM alumnos
            WHERE dni NOT IN (SELECT dni_alumno FROM asistencias WHERE DATE(asistencias.fecha_hora) = '$fecha') 
            ORDER BY apellido";
            $stmt = $this->database->conn->prepare($sql);
            $stmt->execute();
            $alumnos = $stmt->fetchAll();

            foreach ($alumnos as $alumno) { ?>
                <tr>
                    <td><?php echo $alumno['apellido']; ?></td> 
                    <td><?php echo $alumno['nombre']; ?></td>
                    <?php echo "<td>
                        <a href='registro_asistencia.php?dni=".$alumno['dni']."' class='btn btn-success'>Presente</a>
                    </td>"; ?>
                </tr>
            <?php
            }
        }
    }
?>