terraform {
  backend "remote" {
      organization = "Te1m0z-Custom-PHP-Framework"
      workspaces {
          name = "custom-php-framework"
      }
  }
}
resource "null_resource" "example" {
  triggers = {
    value = "A example resource that does nothing!"
  }
}
