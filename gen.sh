./vendor/bin/swagger src 

if [ -d swagger-ui/dist/ ] ; then
  cp -f swagger.json swagger-ui/dist/swagger.json
  echo "[DONE] copy to swagger-ui/dist/swagger.json"
fi

