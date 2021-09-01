import { alias } from 'react-app-rewire-alias';

export default function override(config, env) {
    alias({
        // '@Components': 'src/Components',
        '@constants': 'src/constants',
        // '@HOC': 'src/HOC',
        '@services': 'src/services',
        // '@Utils': 'src/Utils',
    })(config);

    return config;
}