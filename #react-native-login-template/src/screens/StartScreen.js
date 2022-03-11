import React from 'react'
import Background from '../components/Background'
import Logo from '../components/Logo'
import Header from '../components/Header'
import Button from '../components/Button'
import Paragraph from '../components/Paragraph'

export default function StartScreen({ navigation }) {
  return (
    <Background>
      <Logo />
      <Header>  </Header>
      <Paragraph>
         
      </Paragraph>
      <Button
        mode="contained"
        onPress={() => navigation.navigate('LoginScreen')}
      >
        Iniciar sesión 
      </Button>
      <Button
        mode="outlined"
        onPress={() => navigation.navigate('RegisterScreen')}
      >
        Registrarme 
      </Button>
    </Background>
  )
}
