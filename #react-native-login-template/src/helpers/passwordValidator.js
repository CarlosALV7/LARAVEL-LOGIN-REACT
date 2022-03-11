export function passwordValidator(password) {
  if (!password) return "Ingrese su contraseña"
  if (password.length < 5) return 'La contraseña debe tener al menos 5 caracteres.'
  return ''
}
