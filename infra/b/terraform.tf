terraform {
  required_providers {
    aws = {
      source  = "hashicorp/aws"
      version = "~> 4.38"
    }
  }
}

provider "aws" {
  region  = "ap-northeast-1"
  profile = "terraform"
}