pipeline {
  agent none
  stages {
    stage('Pull') {
      agent { node { label 'slave' } }
      git branch: 'master', credentialsId: 'nhatnam99132', url: 'https://github.com/nhatnam99132/bai1-php.git'
      steps {
        echo 'Pull stage'
        sh '''
        sudo scp -i key-pair.pem /var/lib/jenkins/workspace/php-pipeline/* nhatnam@172.31.23.141:/var/www/html/demo
        '''
        // sh '''
        // cd /var/www/html/demo
        // sudo git pull origin master
        // '''
      }
    }
    stage('Build') {
      agent { node { label 'master' } }
      steps {
        echo 'Build stage'
      }
    }

     stage('Deploy') {
       when {
        branch 'production'
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