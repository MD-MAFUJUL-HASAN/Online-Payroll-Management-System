var errMsg;

function isEmpty(strVal, field) {
  if (strVal == null || strVal == "") {
    errMsg = field + " Entry is required";
    return true;
  }
  return false;
}
