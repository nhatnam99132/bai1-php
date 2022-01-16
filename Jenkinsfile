pipeline {
  agent { label 'master' }
  stages {
    stage('Pull') {
      //git branch: 'master', credentialsId: 'nhatnam99132', url: 'https://github.com/nhatnam99132/bai1-php.git'
      steps {
        echo 'Pull stage'
        sh '''
        cd /var/www/html/demo
        sudo git pull origin master
        '''
      }
    }

    stage('Build') {
      steps {
        echo 'Build stage'
      }
    }
    stage('Test') {
      steps {
        //git branch: 'master', credentialsId: 'nhatnam99132', url: 'https://github.com/nhatnam99132/bai1-php.git'
        echo 'Test stage'
        // sh '''
        // sudo cp -r /var/lib/jenkins/workspace/php-demo-pipeline/* /var/www/html/demo
        // '''
        
//         sh '''#!/bin/bash
// << EOF
// cd /var/www/html/demo
// git pull
// EOF'''
      }
    }

  }
}