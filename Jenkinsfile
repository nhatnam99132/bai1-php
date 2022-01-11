pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        echo 'Build stage'
      }
    }

    // stage('Test') {
    //   steps {
    //     echo 'Test stage'
    //   }
    // }

    stage('Deploy') {
      steps {
        echo 'Deploy stage'
        sh '''#!/bin/bash
ssh -T -i /home/jenkins/key-pair.pem www-user@18.191.224.159 << EOF
cd /var/www/html/demo
git pull
EOF'''
      }
    }

  }
}