<?php

return [
    'alipay' => [
        'app_id'         => '2016091700533696',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAstR6/ra6fLW9LD+g0p4uZkbMu8cRvOk4M4pFQ2UZxq5aWzS18WvsiJ8KG8CVZbrq65UmZvRQjCZjPVhC4IdfKdD+nlPJJ21PQRgvFA88GPbpRPGGoC3zMe2oJDd4/f58W3c3D/DVkXffVgiA4no47G3jTC0PTuUt1AD8MpOdNjWEsVgvtk4XX0d/LtQIuY7e87Tlx/njOe/fS8Ym6waZqVgj7pq9h1+C6pJyjtwyaK2Gwj2j7MEfySyXpVX9XS+VuX6DNw0CygvdQKjS2dVhqYKZDwBdp1fmZCGcStKQ/sY91TMj9jmCX0nfF/M7VBFcx1MN+85g6WZ6piAHZqksEwIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEA1U1X2UuIFDz9E/wf5mRJboQ0MIkTnDoWIiZPTEN4i2+fb0wEySV7iDIvQLr1GQD38K7dJbV5oP0CsXIFQ/P9F3ylbBtFw37IGd2yekSQZ4aR6rRr0OmXvUj0U7EKFUsqXpjVhF/vCJmDeQ3MXZE8IB92viDpUJE+Sp4KVYEAiYv/23pSNT0aMfcBaVYtr2PnkM+314mjJJqauRSw8DZMeVNRA7nNO2LLX838Q+5criT/sY9o19fha2TW5L1mh1vOzohoq+szQbO3z/3FIMLXSumAr+q1SJFNz3kLR2s4Vf3kiqFAvmtfaWQ8rrDzbr8gleIrFomxdbGm8UCLTq13CQIDAQABAoIBAF+X4QYOVrcTOiyJstYzHcG82BLka/h5A9BcMO+x0UVUSjS78e0fskQwkYLGBvAkwfmItK2grhjbKyjRO9DfeQ7cmtpfQp3BpPYKqGEpdzoeUijIoQUomwuGtZEIZ8dxP1TT0+UWhW7qNcS7zVolq7eNwk6lO0sTPMJ+H42AWfhKB3V3G9COquXQ/aMMaFHckhdFIw44w4SSGAWgusKhxNf9WYXv2TLuKeQ56f+TQbTnQf0yUiOwo2BdMQBro2N2NX9xQQ02FWN7Ef/tgpBypZTXY20WcfxO+SAa602z7Ljw587z4eH4eh3HilFhSafEzZFKBQHnnBleikrUVYUPZ+0CgYEA6k+iN7qyv5I+Q2kVxpC/8Q8MM1giytDi2USFQF8M7KfAOS0CsYy0CLmYg4u1ZSOBsi1dVlHmhMEG55ukX1rFNkUBu7N0Jq0wJDEv8VJPkmsskW0gqx7QnUID/mE0DFXu6iVOkjF7PtbZkgUVX5DyAe9PGxR97Wb4J8+j/1BiilMCgYEA6QvepZKi3k1fgwBhxgJiR2kzKLSbNG1LThd5iGcBi98v+mSwMfH1e/MhRkIJ+eKBSO2CYR/uh1bjWTud/BqX0z44p1p1cK3tEmeKJIj/qttIzJoDHKkn78LKYJOyydCTmG/fQ9LLU8J958w9en5QBgtcsp/jiEqiI/U3DcN8ZbMCgYEAschmbx6Ljeuqrn9HdHhUCtW+Dh8rlvPTi8L/0A3OwqmtojRSvODjoVMhM36HzguY1taw4VQXMlc7o/RmTauTw0+stvy8frQduPhRRiuMEK6dDGLezLf+1bNHUHX0hf+V3bcc3LQKrW1be/27b92MoocvYH615bGhTKOx7YDSo90CgYBus0e4yNX62TAkj1ribyF2IH+/t0L+fWhHGRmO9LckVQl6XLfhkbj1fwFwWVBZ1gFpvgCv2DY7LcfjDFG4fn1eR/ErdenRc5zooCxbvIQOCgojvoj55VRmLNZrV92WxjBGOeYJVqllCT87i6YseLHUnTMUWqT/icxJXmMfc5u0xwKBgQC8D/Ti5F+3/iknZWrFsl+fFddHEydT582A0XBoWVGMN4+7PZy3JH9+vkRs7771wuVu69jxqhGMKtQ/pcPQxKOvah0Lqnl41lsqFjGJ8dDl7TcHDt+AJazrcZRdVUjPGOOjdCOmuzUL23+vvYLd2NnpPtI5Hkavt4VOCca4GZHZzA==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];