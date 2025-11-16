pipeline {
    agent any  // Usamos cualquier máquina disponible para ejecutar el Pipeline (en este caso, Jenkins local)

    stages {

        stage('Clonar repositorio') {
            steps {
                // Descargamos el código desde la rama main del repositorio de GitHub
                git branch: 'main', url: 'https://github.com/AlexaNaomy/Integracion-Continua-Grupo10.git'
            }
        }

        stage('Construir contenedores') {
            steps {

                // Usamos un bloque PowerShell porque Jenkins está corriendo en Windows
                // y los comandos "sh" (de Linux) no funcionan aquí.
                powershell '''
                    # Intentamos apagar los contenedores si están corriendo
                    # "docker compose down" detiene y elimina contenedores, redes y volúmenes temporales
                    # Si no existen contenedores, ocurre un error.
                    # Gracias a "|| echo ...", evitamos que el pipeline falle si no hay contenedores previos.
                    docker compose down || echo "No hay contenedores para detener"

                    # Construimos nuevamente las imágenes usando nuestro Dockerfile
                    # "--build" obliga a reconstruir las imágenes desde cero
                    # "-d" significa "detached mode" → correr los contenedores en segundo plano
                    docker compose up --build -d
                '''

            }
        }

        stage('Pruebas básicas') {
            steps {
                // Simulamos una prueba sencilla (solo imprime un mensaje)
                echo 'Ejecutando pruebas simples...'
            }
        }

    }
}
