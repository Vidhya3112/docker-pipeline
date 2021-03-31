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
                
        }
    }
	
      stage('Deploy to Kubernetes'){
        steps{
	    sh 'gcloud container clusters get-credentials cluster-1 \
                --zone us-central1-c \
                --project rising-minutia-309213'
            sh 'kubectl apply -f deployment.yml'
       }
    }

        	
		
    }
}
