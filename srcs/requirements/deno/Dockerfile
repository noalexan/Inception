FROM alpine:3.16

EXPOSE 8000

COPY tools/main.ts /server/

RUN apk add --no-cache curl
RUN curl -fsSL https://deno.land/x/install/install.sh | sh

ENV DENO_INSTALL="/root/.deno"
ENV PATH="$DENO_INSTALL/bin:$PATH"

CMD [ "deno", "run", "/main.ts" ]
