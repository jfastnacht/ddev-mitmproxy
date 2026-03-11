[![add-on registry](https://img.shields.io/badge/DDEV-Add--on_Registry-blue)](https://addons.ddev.com)
[![tests](https://github.com/jfastnacht/ddev-mitmproxy/actions/workflows/tests.yml/badge.svg?branch=main)](https://github.com/jfastnacht/ddev-mitmproxy/actions/workflows/tests.yml?query=branch%3Amain)
[![last commit](https://img.shields.io/github/last-commit/jfastnacht/ddev-mitmproxy)](https://github.com/jfastnacht/ddev-mitmproxy/commits)
[![release](https://img.shields.io/github/v/release/jfastnacht/ddev-mitmproxy)](https://github.com/jfastnacht/ddev-mitmproxy/releases/latest)

# DDEV Mitmproxy

## Overview

This add-on integrates Mitmproxy into your [DDEV](https://ddev.com/) project.

## Installation

```bash
ddev add-on get jfastnacht/ddev-mitmproxy
ddev restart
```

After installation, make sure to commit the `.ddev` directory to version control.

## Usage

| Command | Description |
| ------- | ----------- |
| `ddev describe` | View service status and used ports for Mitmproxy |
| `ddev logs -s mitmproxy` | Check Mitmproxy logs |

## Advanced Customization

To change the Docker image:

```bash
ddev dotenv set .ddev/.env.mitmproxy --mitmproxy-docker-image="ddev/ddev-utilities:latest"
ddev add-on get jfastnacht/ddev-mitmproxy
ddev restart
```

Make sure to commit the `.ddev/.env.mitmproxy` file to version control.

All customization options (use with caution):

| Variable | Flag | Default |
| -------- | ---- | ------- |
| `MITMPROXY_DOCKER_IMAGE` | `--mitmproxy-docker-image` | `ddev/ddev-utilities:latest` |

## Credits

**Contributed and maintained by [@jfastnacht](https://github.com/jfastnacht)**
