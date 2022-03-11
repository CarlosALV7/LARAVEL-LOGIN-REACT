export function emailValidator(email) {
  const re = /\S+@\S+\.\S+/
  if (!email) return "Ingrese su email"
  if (!re.test(email)) return '¡Uy! Necesitamos una dirección de correo electrónico válida.'
  return ''
}
