pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        echo 'Build stage'
      }
    }

    stage('Test') {
      steps {
        echo 'Test stage'
      }
    }
    stage('Deploy') {
      steps {
        git branch: 'master', credentialsId: 'nhatnam99132', url: 'https://github.com/nhatnam99132/bai1-php.git'
        echo 'Deploy stage'
        sh '''
        sudo cp -r /var/lib/jenkins/workspace/php-demo-pipeline/* /var/www/html/demo
        '''
//         sh '''#!/bin/bash
// << EOF
// cd /var/www/html/demo
// git pull
// EOF'''
      }
    }

  }
}