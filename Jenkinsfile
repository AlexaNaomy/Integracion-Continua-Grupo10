pipeline {
    agent any  // Pedimos que use cualquier máquina disponible para ejecutar este Pipeline. En este caso, nuestra máquina será el Jenkins local.

    // Definimos las etapas principales del Pipeline
    stages {

        stage('Clonar repositorio') {
            steps {
                git branch: 'main', url: 'https://github.com/AlexaNaomy/Integracion-Continua-Grupo10.git'
                // Le pedimos a Jenkins que descargue el código desde la rama main del repositorio de GitHub
            }
        }

        stage('Construir contenedores') {
            steps {
                sh 'docker compose down || true' 
                // Apagamos los contenedores que estén corriendo. 
                // Si no existen, se ejecuta el comando 'true' para evitar que Jenkins marque error y el Pipeline continúe normalmente.

                sh 'docker compose up --build -d'
                // Construimos nuevamente las imágenes utilizando el Dockerfile
                // y levantamos los contenedores en segundo plano (modo detach)
            }
        }

        stage('Pruebas básicas') {
            steps {
                echo 'Ejecutando pruebas simples...'
                // Este paso imprime un mensaje simple. Simula una etapa de pruebas dentro del Pipeline.
            }
        }
    }
}

