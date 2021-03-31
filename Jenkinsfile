pipeline {
	
	environment{
		registry = "vidhya3112/k8s-pipeline"
		registryCredentials = 'docker-hub'
		dockerImage = ''
	}
	
	
    agent any
	
	stages
	
	{
		
	 
        stage('Build image') {
        /* This builds the actual image */
            
		steps{
		    script{
        dockerImage = docker.build registry +":$BUILD_NUMBER"
            }
	    }
    }

        stage('Push image') {
        /* 
			You would need to first register with DockerHub before you can push images to your account*/
		steps{
			script{
        docker.withRegistry('',registryCredentials) {
            dockerImage.push()
	}
            } 
                echo "Trying to Push Docker Build to DockerHub"
        }
    }
        
      stage('Deploy to Kubernetes'){
        steps{
            sh 'kubectl apply -f deployment.yml'
       }
    }

        	
		
    }
}
