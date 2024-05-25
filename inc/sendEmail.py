from twilio.rest import Client

account_sid = 'AC36e5d266b52677fc40ac49767f7d08cb'
auth_token = 'f5c89c225cee95f7ca2d47171e2bb738'
client = Client(account_sid, auth_token)

message = client.messages.create(
  from_='whatsapp:+14155238886',
  body='Your appointment is coming up on July 21 at 3PM',
  to='whatsapp:+917643927304'
)

print(message.sid)