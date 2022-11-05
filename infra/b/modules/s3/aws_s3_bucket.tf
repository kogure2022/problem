
resource "aws_s3_object" "single_object" {
    bucket = "bucket-name"
    key = "sample.txt"
    source = "sample.txt"
    etag = filemd5("sample.txt")
}

