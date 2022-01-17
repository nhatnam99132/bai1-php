pipeline {
  agent none
  environment {
        DISABLE_AUTH = 'true'
        DB_ENGINE    = 'mysql'
  }
  parameters {
        string(name: 'Greeting', defaultValue: 'Hello', description: 'How should I greet the world?')
  }
  stages {
    stage('Pull') {
      agent {
         label 'slave'
      }
      when {
        branch 'develop'
      }
      steps {
        git branch: 'develop', credentialsId: 'nhatnam99132', url: 'https://github.com/nhatnam99132/bai1-php.git'
        echo 'Pull stage'
        echo "Running ${env.BUILD_ID} on ${env.JENKINS_URL}"
        echo "Database engine is ${DB_ENGINE}"
        sh '''
        scp -i /home/jenkins-slave-1/key-pair.pem /home/jenkins-slave-1/workspace/php-multi-pipeline_develop/* nhatnam@172.31.23.141:/var/www/html/demo
        '''
        // sh '''
        // cd /var/www/html/demo
        // sudo git pull origin master
        // '''
      }
    }
    stage('Build') {
      when {
        branch 'develop'
      }
      agent {
         label 'master'
      }
      steps {
        echo 'Build stage'
        echo "${params.Greeting} World!"
        sh 'printenv'
      }
    }

     stage('Deploy') {
      when {
        branch 'master'
      }
      steps {
        echo 'Deploy stage'
      }
    }
  }
}


    // stage('Deyploy') {
    //   steps {
    //     //git branch: 'master', credentialsId: 'nhatnam99132', url: 'https://github.com/nhatnam99132/bai1-php.git'
    //     echo 'Test stage'
    //     // sh '''
    //     // sudo cp -r /var/lib/jenkins/workspace/php-demo-pipeline/* /var/www/html/demo
    //     // '''
        
//         sh '''#!/bin/bash
// << EOF
// cd /var/www/html/demo
// git pull
// EOF'''
//       }
//     }

//   }
// }