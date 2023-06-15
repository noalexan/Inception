FROM alpine:3.16

EXPOSE 20 21

RUN apk add --update --no-cache vsftpd

#RUN sed -i "s/chroot_local_user=NO/chroot_local_user=YES/" /etc/vsftpd/vsftpd.conf && \
#	sed -i "s/#local_enable/local_enable/" /etc/vsftpd/vsftpd.conf && \
#	sed -i "s/#write_enable/write_enable/" /etc/vsftpd/vsftpd.conf

CMD [ "vsftpd", "/etc/vstfpd/vsftpd.conf" ]

