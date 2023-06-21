FROM alpine:3.16

ARG FTP_USER
ARG FTP_PASSWORD

EXPOSE 20 21

RUN apk add --update --no-cache vsftpd
RUN adduser -D -g '' ${FTP_USER} && echo "${FTP_USER}:${FTP_PASSWORD}" | chpasswd

RUN echo "anonymous_enable=NO" >> /etc/vsftpd/vsftpd.conf \
    && echo "local_enable=YES" >> /etc/vsftpd/vsftpd.conf \
    && echo "write_enable=YES" >> /etc/vsftpd/vsftpd.conf \
    && echo "local_umask=022" >> /etc/vsftpd/vsftpd.conf \
    && echo "chroot_local_user=YES" >> /etc/vsftpd/vsftpd.conf \
    && echo "local_root=/wordpress" >> /etc/vsftpd/vsftpd.conf

CMD ["vsftpd", "/etc/vsftpd/vsftpd.conf"]
