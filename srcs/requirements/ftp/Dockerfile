FROM alpine:3.16

EXPOSE 20 21

RUN apk add --update --no-cache vsftpd

COPY conf/vsftpd.conf /etc/vsftpd

CMD [ "vsftpd" ]

