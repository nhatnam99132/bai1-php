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
<< EOF
cd /var/www/html/demo
git pull
EOF'''
      }
    }

  }
}