export const params = {
  command: {
    display: 'command',
    type: 'text',
    default: '',
    size: 'whole'
  },
  //option
  help: {
    display: '--help',
    type: 'check',
    default: false,
    size: 'whole'
  },
  //ls option
  l: {
    display: '-l',
    type: 'check',
    default: false,
    size: 'half'
  },
  a: {
    display: '-a',
    type: 'check',
    default: false,
    size: 'half'
  },
  //cat option
  n:{
    display: '-n',
    type: 'check',
    default: false,
    size: 'half'
  },
  A: {
    display: '-A',
    type: 'check',
    default: false,
    size: 'half'
  },

  contents:{
    display: 'file contents',
    type: 'textarea',
    rows: 5,
    default: 'no contents',
    size: 'whole'
  }
}
