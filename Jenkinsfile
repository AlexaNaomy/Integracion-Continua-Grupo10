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
                powershell '''
                    Write-Host "Deteniendo contenedores si existen..."
                    docker compose down -v 2>$null

                    Write-Host "Construyendo e iniciando contenedores..."
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

