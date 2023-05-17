<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'firebase' => [
        'database_url' => "https://laravel-dfbf1-default-rtdb.firebaseio.com",
        'project_id' => "laravel-dfbf1",
        'private_key_id' => "0a341209feb84d0ecd927379aa62683a246391b2",
        'private_key' => str_replace("\\n", "\n", "MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCHxZjozc5qX6ak\nTau8J4hSgkZiXZqjNXtG+uTaG6mbXQbOHhLMPEhUuSjWRH27bGubs8U4yxzqvjhc\nJCYIsIg4+RT3NX/rRTavsCAYK3ZVvJnWtjq2jiI0EHlYEbswDY0wz19JLf3Y5K0H\n4qSzvEqQL2o4deJhNo+K5O3mU5ZKiRcKZfMpmxPMvT5KGglGPhTex/hJht2t6ifY\nftCRR+HODGmelQ3YT/pjh+UvCjHTBJDNqCnjz4QQ2LGzZsjhguzhCDkvwYov96Wm\nW3LnYaFV/MGraPKeni3ajuhdMkB5S7r6YxyTeYDo6av+fmblm26CvhOffwTne8lH\noBR7mFIPAgMBAAECggEAKu3tpV69r6DC3hy4+ms9jWknvB6AsK5OZmkaR2SLwlYt\nuqqDoxREgpVxNh696q8jbz3uVEDUydyPkYLUi9bVm74WRPwjkE54NiDoZPwJFJ7n\nvZ4s/l/+rJuw4onouA7w38gSBt+F7jiQBXhCP5p/sQts+KE9jSNlS7OLDVLMqJAu\nU++m4Cvn6M50F2O2pX/CGtDuSdHhmhIKY7todZb6tdeCNaKZZl1WAc2PA93mu6HF\nzl5iwTkZX3j2cf+kKKIy0rgH6DBB9AC3/IxPfEXztfsf5UPxHGvh4RkZDRYrVxcp\nkCyH58dYz2bHKDcVgGsLpLSySdjkR/fDrSerwnQE0QKBgQC797uwP8LLe++Usm0t\nbgXM+SGNrg9Eys/vaspu4P0kmuX30Y19zs+jchWKSEJAMOdb1QismuyKR61ktlNX\nkrtqhA5qJ56gPzJDmjArAIsskjofx2oaV9mODFzANQfPEY8w0Ht68kQIFkPKZDPn\n3ehX3uHwdVZSCTg+WaUaElOzdQKBgQC46aASVvImmuX2zpqGY6Ruzh1+284IeB77\nv5btYCVgddvy/C/sPFERjIUMiOEQhim9p4EPVrmVF+8pkfDZct+U4gSfg/iWU0YQ\nBqF71K8rp4iLmWEUT/8hENic8xPtvsbVuqSyQSDoWH8bgY4me4x+ZGfMtFx14M7m\ngs4ShlPS8wKBgQCBINkBZWwOmh+mSUUTdofpniRcznySx7k9QmG69jkxUnA1ZPIM\nwWyHXjJKAwXwTyhBQAJrgSqKfF8z1sU+XgD+VaYJaxpf/8oqAtygTglOH05q0nWj\nj0JXgUqeiE/LAscZw79wYMo3vAPqIBhAa4PYCbexlwor5UWMH816MajqmQKBgAgE\nEK1a2Yp04o0tbaNvxFwNUVgDfU3+rxEowAkwRs6ErXE+H3G1N6p0FfxyHpeRyVNw\nZHbewpLFA9ggfHlgsnKIzbyAgxE5MOtW7j8o/CL/UzsB/iRcR2oOieVb4DxJLeNs\nAOG9UwjfdTsjBZ+DcZa1EY7dLrjpcu6pMve4nP+jAoGALqQy5k2CE4vcV+B1DQrw\ndFR75Y1DGX1PzAELeZxw1ynzLl+2ODTjCLqU0jtMBsrtfFtgNq8+/ypS7Ju/lEDK\ne7o+1GRqg0kMhryKPy24bbAgfjHu9jPGpYJeV/Bwr/4nz/VVIzQeXg++IFzgMgCz\nd+E953wZJQCesaUcY3ZL1mo="),
        'client_email' => "firebase-adminsdk-rxzxn@laravel-dfbf1.iam.gserviceaccount.com",
        'client_id' => "110315359300340149097",
        'client_x509_cert_url' => "https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-rxzxn%40laravel-dfbf1.iam.gserviceaccount.com",
    ]

];
