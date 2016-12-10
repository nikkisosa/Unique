{
    "properties": {
        "channel_id": {
            "type": "string",
            "example": "BLUEMIX",
            "description": "Channel ID"
        },
        "transaction_id": {
            "type": "string",
            "example": "1234567891",
            "description": "Unique Transaction ID"
        },
        "status": {
            "type": "string",
            "example": "S",
            "description": "Status of the response [S,F]"
        },
        "confirmation_no": {
            "type": "string",
            "example": "P00000000083",
            "description": "Confirmation Number of Payment Request"
        },
        "error_message": {
            "type": "string",
            "example": "",
            "description": "Error Message of Payment Request"
        }
    },
    "additionalProperties": false
}